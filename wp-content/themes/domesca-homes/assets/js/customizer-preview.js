/* Domesca Homes — Customizer live preview (Rule 19). */
(function () {
  'use strict';

  var map = {
    primary_color: ['--blue', '--primary-color'],
    secondary_color: ['--secondary-color'],
    accent_color: ['--accent-color'],
    text_color: ['--ink', '--text-color'],
    bg_color: ['--white', '--bg-color'],
    border_color: ['--n-200', '--border-color'],
    font_heading: ['--f-display'],
    font_body: ['--f-body'],
    font_accent: ['--f-accent'],
    section_padding: ['--sec-y', '--section-padding'],
    container_width: ['--wrap', '--container-max-width'],
    container_pad: ['--gutter', '--container-padding']
  };

  Object.keys(map).forEach(function (setting) {
    wp.customize(setting, function (value) {
      value.bind(function (newValue) {
        map[setting].forEach(function (variable) {
          document.documentElement.style.setProperty(variable, newValue);
        });
      });
    });
  });
})();
