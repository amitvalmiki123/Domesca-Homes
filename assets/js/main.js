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

  /* ---------- Mobile navigation ---------- */
  var mnav = document.getElementById('mnav');
  var burger = document.querySelector('.burger');
  var lastFocus = null;

  function openNav() {
    if (!mnav) return;
    lastFocus = document.activeElement;
    mnav.classList.add('is-open');
    burger.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
    var first = mnav.querySelector('.mnav__close');
    if (first) first.focus();
  }
  function closeNav() {
    if (!mnav) return;
    mnav.classList.remove('is-open');
    burger.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
    if (lastFocus) lastFocus.focus();
  }

  if (burger) {
    burger.addEventListener('click', function () {
      mnav.classList.contains('is-open') ? closeNav() : openNav();
    });
  }
  document.querySelectorAll('[data-mnav-close]').forEach(function (el) {
    el.addEventListener('click', closeNav);
  });
  if (mnav) {
    mnav.querySelectorAll('a[href]').forEach(function (a) {
      a.addEventListener('click', closeNav);
    });
    // Mobile sub-menus
    mnav.querySelectorAll('.mnav__a[aria-expanded]').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var open = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!open));
        collapse(btn.nextElementSibling, !open);
      });
    });
  }
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mnav && mnav.classList.contains('is-open')) closeNav();
  });

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

  /* ---------- FAQ category tabs ---------- */
  var faqTabs = document.querySelectorAll('[data-tab]');
  faqTabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      faqTabs.forEach(function (t) {
        t.setAttribute('aria-selected', 'false');
        t.setAttribute('aria-pressed', 'false');
        var p = document.getElementById(t.getAttribute('data-tab'));
        if (p) p.hidden = true;
      });
      tab.setAttribute('aria-selected', 'true');
      tab.setAttribute('aria-pressed', 'true');
      var panel = document.getElementById(tab.getAttribute('data-tab'));
      if (!panel) return;
      panel.hidden = false;
      // Reset then open the first question in the newly shown panel
      panel.querySelectorAll('.acc__btn').forEach(function (b, i) {
        b.setAttribute('aria-expanded', i === 0 ? 'true' : 'false');
        collapse(b.parentElement.nextElementSibling, i === 0);
      });
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
