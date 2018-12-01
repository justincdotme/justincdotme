window._ = require('lodash');

const WOW = require('wowjs');

window.wow = new WOW.WOW({
    live: false
});

window.wow.init();

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('jquery-ui/ui/effect.js');
    require('bootstrap');
} catch (e) {}

let token = document.head.querySelector('meta[name="csrf-token"]');
