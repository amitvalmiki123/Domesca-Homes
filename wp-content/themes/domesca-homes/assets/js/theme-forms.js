/* Domesca Homes — WordPress enquiry forms
   Replaces the static demo handler when the theme is running on WordPress.
   Submits via admin-ajax.php using the nonce registered in enqueue.php. */
(function () {
  'use strict';

  var cfg = window.dscTheme || {};

  function setStatus(form, message, ok) {
    var status = form.querySelector('.form-status');
    if (!status) return;
    status.classList.add('is-on');
    status.classList.toggle('is-ok', !!ok);
    status.textContent = message;
  }

  document.querySelectorAll('form[data-dsc-form]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      var missing = [];
      form.querySelectorAll('[required]').forEach(function (f) {
        if (!f.value.trim()) missing.push(f);
      });
      if (missing.length) {
        setStatus(form, 'Please complete your name, phone and email so we can get back to you.', false);
        missing[0].focus();
        return;
      }

      var data = new FormData(form);
      data.append('action', cfg.action || 'dsc_enquiry');
      data.append('nonce', cfg.nonce || '');
      data.append('website', '');

      var submit = form.querySelector('[type="submit"]');
      if (submit) submit.setAttribute('disabled', 'disabled');

      fetch(cfg.ajaxUrl || '/wp-admin/admin-ajax.php', {
        method: 'POST',
        body: data,
        credentials: 'same-origin'
      })
        .then(function (res) { return res.json(); })
        .then(function (json) {
          if (json && json.success) {
            setStatus(form, json.data.message || 'Thank you — your enquiry has been sent.', true);
            form.querySelectorAll('input, textarea').forEach(function (f) { f.value = ''; });
          } else {
            setStatus(form, (json && json.data && json.data.message) || 'Something went wrong. Please try again.', false);
          }
        })
        .catch(function () {
          setStatus(form, 'We could not send your message. Please try again or call us directly.', false);
        })
        .finally(function () {
          if (submit) submit.removeAttribute('disabled');
        });
    });
  });
})();
