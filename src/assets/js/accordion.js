var accordionToggle = document.getElementsByClassName('accordion-header');
var i;

for (i = 0; i < accordionToggle.length; i++) {
    accordionToggle[i].addEventListener('click', function() {
        this.classList.toggle('opened');
    });
}