var filter = document.querySelector('#productFilter');
var toggle = document.querySelector('#toggleFilter');
var containerEl = document.querySelector('.accordion-wrapper');

toggle.addEventListener('click', function() {
    filter.classList.toggle('opened');
});

var mixer = mixitup(containerEl, {
    multifilter: {
        enable: true // enable the multifilter extension for the mixer
    }
});