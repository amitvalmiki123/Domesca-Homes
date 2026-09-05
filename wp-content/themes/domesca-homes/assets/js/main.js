/* Domesca Homes — homepage interactions
   Vanilla JS, no dependencies. Every behaviour degrades gracefully. */
(function () {
  'use strict';

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- Collapsible helper ----------
     Animates height between 0 and the content height, then settles on `auto`
     so the panel keeps reflowing if the viewport or content changes. */
  function collapse(el, open) {
    if (!el) return;
    if (el._collapseHandler) {
      el.removeEventListener('transitionend', el._collapseHandler);
      el._collapseHandler = null;
    }
    clearTimeout(el._collapseTimer);
    el.classList.toggle('is-open', open);

    if (reduceMotion) {
      el.style.height = open ? 'auto' : '0px';
      return;
    }

    if (open) {
      el.style.height = el.scrollHeight + 'px';
      // Settle on `auto` so the panel keeps reflowing afterwards. A timer backs
      // up transitionend, which can be missed if the tab is backgrounded.
      var settle = function () {
        el.style.height = 'auto';
        el.removeEventListener('transitionend', el._collapseHandler);
        el._collapseHandler = null;
        clearTimeout(el._collapseTimer);
      };
      el._collapseHandler = function (e) {
        if (e.target === el && e.propertyName === 'height') settle();
      };
      el.addEventListener('transitionend', el._collapseHandler);
      el._collapseTimer = setTimeout(settle, 700);
    } else {
      // Pin the current height before collapsing, or the transition has no start value.
      el.style.height = el.scrollHeight + 'px';
      void el.offsetHeight;
      el.style.height = '0px';
    }
  }

  /* ---------- Sticky header state ---------- */
  var hdr = document.getElementById('hdr');
  if (hdr) {
    var onScroll = function () {
      hdr.classList.toggle('is-stuck', window.scrollY > 12);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ---------- Mobile navigation ----------
     The slide itself is pure CSS (translate3d on a composited layer). What the
     script has to do is stay out of the way of that first frame:
       · focus the close button on the next frame with preventScroll, so the
         browser does not jerk the panel (and the page) to bring it into view;
       · lock scrolling with a class instead of swapping body overflow inline,
         reserving the scrollbar width so nothing shifts sideways mid-slide;
       · close the drawer if the viewport grows past the burger breakpoint. */
  var mnav = document.getElementById('mnav');
  var burger = document.querySelector('.burger');
  var lastFocus = null;
  var navBreak = window.matchMedia('(max-width:1160px)');

  function lockScroll(on) {
    var de = document.documentElement;
    var y = window.scrollY || window.pageYOffset || 0;
    if (on) {
      // Measure before locking: once the scrollbar is gone the gap is unknown.
      var gap = window.innerWidth - de.clientWidth;
      de.style.setProperty('--sbw', gap > 0 ? gap + 'px' : '0px');
      de.classList.add('is-locked');
    } else {
      de.classList.remove('is-locked');
    }
    // Some mobile browsers re-anchor the document when the root stops being
    // scrollable; putting the offset back keeps the page from jumping under the
    // drawer (only fires when the position actually moved).
    if ((window.scrollY || 0) !== y) window.scrollTo(0, y);
  }

  function navOpen() {
    return !!mnav && mnav.classList.contains('is-open');
  }

  function focusable() {
    if (!mnav) return [];
    return Array.prototype.filter.call(
      mnav.querySelectorAll('a[href], button:not([disabled])'),
      function (el) {
        if (el.disabled) return false;
        // Links inside a collapsed sub-menu are hidden, so they are not stops.
        var sub = el.closest ? el.closest('.mnav__sub') : null;
        return !sub || sub.classList.contains('is-open');
      }
    );
  }

  /* Safety net for the old "drawer arrives from the wrong place" bug: browsers
     scroll a clipped container to reveal whatever receives focus, and the panel
     is parked off-screen until the slide finishes. The panel is position:fixed
     and .mnav is overflow:clip now, so there is nothing left to scroll — this
     just guarantees it on browsers that support neither. */
  function resetNavScroll() {
    if (!mnav) return;
    if (mnav.scrollLeft) mnav.scrollLeft = 0;
    if (mnav.scrollTop) mnav.scrollTop = 0;
  }

  function openNav() {
    if (!mnav || navOpen()) return;
    // Safari/Firefox do not focus a button on click, so fall back to the burger
    // to make sure focus lands back on the trigger when the drawer closes.
    var active = document.activeElement;
    lastFocus = (active && active !== document.body && document.contains(active)) ? active : burger;
    lockScroll(true);
    mnav.classList.add('is-open');
    if (burger) burger.setAttribute('aria-expanded', 'true');
    resetNavScroll();
    var first = mnav.querySelector('.mnav__close');
    if (first) {
      requestAnimationFrame(function () {
        first.focus({ preventScroll: true });
        resetNavScroll(); // same frame, so nothing visibly jumps
      });
    }
  }

  function closeNav() {
    if (!mnav || !navOpen()) return;
    mnav.classList.remove('is-open');
    if (burger) burger.setAttribute('aria-expanded', 'false');
    resetNavScroll();
    lockScroll(false);
    // Skip the restore if the trigger has been hidden by a resize in the
    // meantime — focusing a display:none node would just drop focus to <body>.
    if (lastFocus && document.contains(lastFocus) && lastFocus.getClientRects().length) {
      lastFocus.focus({ preventScroll: true });
    }
    lastFocus = null;
  }

  if (burger && mnav) {
    burger.addEventListener('click', function () {
      navOpen() ? closeNav() : openNav();
    });
  }
  document.querySelectorAll('[data-mnav-close]').forEach(function (el) {
    el.addEventListener('click', closeNav);
  });
  if (mnav) {
    mnav.querySelectorAll('a[href]').forEach(function (a) {
      a.addEventListener('click', closeNav);
    });
    // Mobile sub-menus — the +/- button toggles, the parent label is a real link.
    mnav.querySelectorAll('.mnav__pm[aria-expanded]').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var row = btn.closest ? btn.closest('.mnav__row') : null;
        var link = row ? row.querySelector('.mnav__link') : null;
        var panel = row ? row.nextElementSibling : null;
        if (panel && !panel.classList.contains('mnav__sub')) panel = null;
        var open = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!open));
        if (link) link.setAttribute('aria-expanded', String(!open));
        collapse(panel, !open);
      });
    });
  }
  document.addEventListener('keydown', function (e) {
    if (!navOpen()) return;
    if (e.key === 'Escape') { closeNav(); return; }
    // Keep Tab inside the dialog while it is modal.
    if (e.key === 'Tab') {
      var items = focusable();
      if (items.length < 2) return;
      var first = items[0], last = items[items.length - 1];
      if (e.shiftKey && document.activeElement === first) {
        e.preventDefault(); last.focus();
      } else if (!e.shiftKey && document.activeElement === last) {
        e.preventDefault(); first.focus();
      }
    }
  });
  // Rotating a phone or resizing past the breakpoint would otherwise leave the
  // drawer (and the scroll lock) on top of a desktop layout that has its own menu.
  function onNavBreak(e) { if (!e.matches) closeNav(); }
  if (navBreak.addEventListener) navBreak.addEventListener('change', onNavBreak);
  else if (navBreak.addListener) navBreak.addListener(onNavBreak);

  /* ---------- Read-more disclosures ---------- */
  document.querySelectorAll('[data-more]').forEach(function (btn) {
    var target = document.getElementById(btn.getAttribute('data-more'));
    if (!target) return;
    btn.addEventListener('click', function () {
      var open = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!open));
      collapse(target, !open);
    });
  });

  /* ---------- FAQ accordions (one open per group) ---------- */
  function closeAll(acc) {
    acc.querySelectorAll('.acc__btn').forEach(function (other) {
      other.setAttribute('aria-expanded', 'false');
      collapse(other.parentElement.nextElementSibling, false);
    });
  }
  document.querySelectorAll('.acc').forEach(function (acc) {
    acc.querySelectorAll('.acc__btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var open = btn.getAttribute('aria-expanded') === 'true';
        closeAll(acc);
        if (!open) {
          btn.setAttribute('aria-expanded', 'true');
          collapse(btn.parentElement.nextElementSibling, true);
        }
      });
    });
  });
  // Open the first question of the first visible FAQ panel
  var firstFaq = document.querySelector('.faq__panel:not([hidden]) .acc__btn');
  if (firstFaq) {
    firstFaq.setAttribute('aria-expanded', 'true');
    collapse(firstFaq.parentElement.nextElementSibling, true);
  }

  /* ---------- FAQ category tabs ----------
     Proper tablist behaviour: one tab stop with arrow-key movement (roving
     tabindex), aria-selected driving the .chip styling, and the active chip
     scrolled into view when the tablist is a horizontal scroller on phones. */
  var faqTabs = Array.prototype.slice.call(document.querySelectorAll('[data-tab]'));
  var tabList = document.querySelector('.faq__tabs');

  function selectTab(tab, moveFocus) {
    faqTabs.forEach(function (t) {
      var on = t === tab;
      t.setAttribute('aria-selected', String(on));
      t.tabIndex = on ? 0 : -1;
      var p = document.getElementById(t.getAttribute('data-tab'));
      if (p) p.hidden = !on;
    });
    var panel = document.getElementById(tab.getAttribute('data-tab'));
    if (panel) {
      // Reset then open the first question in the newly shown panel
      panel.querySelectorAll('.acc__btn').forEach(function (b, i) {
        b.setAttribute('aria-expanded', i === 0 ? 'true' : 'false');
        collapse(b.parentElement.nextElementSibling, i === 0);
      });
    }
    if (moveFocus) tab.focus();
    if (tabList && tab.scrollIntoView && tabList.scrollWidth > tabList.clientWidth + 1) {
      tab.scrollIntoView({ block: 'nearest', inline: 'nearest', behavior: reduceMotion ? 'auto' : 'smooth' });
    }
  }

  faqTabs.forEach(function (tab, i) {
    tab.addEventListener('click', function () { selectTab(tab, false); });
    tab.addEventListener('keydown', function (e) {
      var next = null;
      switch (e.key) {
        case 'ArrowRight':
        case 'ArrowDown': next = faqTabs[(i + 1) % faqTabs.length]; break;
        case 'ArrowLeft':
        case 'ArrowUp': next = faqTabs[(i - 1 + faqTabs.length) % faqTabs.length]; break;
        case 'Home': next = faqTabs[0]; break;
        case 'End': next = faqTabs[faqTabs.length - 1]; break;
      }
      if (next) { e.preventDefault(); selectTab(next, true); }
    });
  });

  /* ---------- Project filters ---------- */
  var filters = document.querySelectorAll('[data-filter]');
  var tiles = document.querySelectorAll('#proj-grid .tile');
  filters.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var cat = btn.getAttribute('data-filter');
      filters.forEach(function (b) { b.setAttribute('aria-pressed', String(b === btn)); });
      tiles.forEach(function (tile) {
        var cats = (tile.getAttribute('data-cat') || '').split(/\s+/);
        var show = cat === 'all' || cats.indexOf(cat) !== -1;
        tile.classList.toggle('is-hidden', !show);
      });
    });
  });

  /* ---------- Footer menus → accordions on phones ----------
     Above 720px the footer columns stay open exactly as designed: CSS forces
     the panels open there and the triggers leave the tab order (and drop
     aria-expanded, because there is nothing to toggle). Below 720px the same
     headings collapse, so the footer becomes a few tappable rows instead of a
     wall of links. Markup default is expanded, so the page still reads fine
     before this runs. */
  var ftBreak = window.matchMedia('(max-width:720px)');
  var ftToggles = Array.prototype.slice.call(document.querySelectorAll('[data-ft-toggle]'));

  function syncFooterMenus() {
    var mobile = ftBreak.matches;
    ftToggles.forEach(function (btn) {
      var panel = document.getElementById(btn.getAttribute('aria-controls'));
      if (!panel) return;
      // Clear whatever the last animation left inline so the stylesheet owns
      // the state again — no closing animation on load or on rotate.
      panel.style.height = '';
      panel.classList.remove('is-open');
      btn.tabIndex = mobile ? 0 : -1;
      if (mobile) btn.setAttribute('aria-expanded', 'false');
      else btn.removeAttribute('aria-expanded');
    });
  }

  ftToggles.forEach(function (btn) {
    btn.addEventListener('click', function () {
      if (!ftBreak.matches) return;
      var panel = document.getElementById(btn.getAttribute('aria-controls'));
      if (!panel) return;
      var open = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!open));
      collapse(panel, !open);
    });
  });
  if (ftToggles.length) {
    syncFooterMenus();
    if (ftBreak.addEventListener) ftBreak.addEventListener('change', syncFooterMenus);
    else if (ftBreak.addListener) ftBreak.addListener(syncFooterMenus);
  }

  /* ---------- Reveal on scroll ---------- */
  var reveals = document.querySelectorAll('.rv');
  if (reduceMotion || !('IntersectionObserver' in window)) {
    reveals.forEach(function (el) { el.classList.add('is-in'); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-in');
          io.unobserve(entry.target);
        }
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.06 });
    reveals.forEach(function (el) { io.observe(el); });
  }

  /* ---------- Demo form handling (mockup only) ----------
     In WordPress this is replaced by the real form plugin (e.g. Gravity Forms /
     WPForms / Fluent Forms). Nothing is sent from this static concept. */
  document.querySelectorAll('[data-demo-form]').forEach(function (form) {
    var status = form.querySelector('.form-status');
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var missing = [];
      form.querySelectorAll('[required]').forEach(function (f) {
        if (!f.value.trim()) missing.push(f);
      });
      if (!status) return;
      status.classList.add('is-on');
      if (missing.length) {
        status.textContent = 'Please complete your name, phone and email so we can get back to you.';
        missing[0].focus();
        return;
      }
      status.textContent = 'Thank you — this is a design concept, so no enquiry has been sent. On the live site your details would reach the Domesca Homes team.';
      form.querySelectorAll('input, textarea').forEach(function (f) { f.value = ''; });
    });
  });

  /* ---------- Smooth in-page scrolling with sticky-header offset ---------- */
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var id = a.getAttribute('href');
      if (!id || id === '#') return;
      var target = document.querySelector(id);
      if (!target) return;
      e.preventDefault();
      var offset = (hdr ? hdr.offsetHeight : 0) + 12;
      var top = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top: top, behavior: reduceMotion ? 'auto' : 'smooth' });
      if (history.replaceState) history.replaceState(null, '', id);
    });
  });
})();