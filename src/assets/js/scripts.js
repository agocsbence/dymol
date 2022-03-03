//desktop navbar position
var header = document.querySelector('header');

if (header.classList.contains('has-hero')) {
    
    let bigText = document.querySelector('#bigText'),
        logoText = document.querySelector('#logoText'),
        triggerPos = window.innerHeight - bigText.offsetHeight;

    window.addEventListener('scroll', (e) => {
        var scrollPos = window.scrollY;
        if (scrollPos >= triggerPos - 300) {
            bigText.classList.add('hidden');
            logoText.classList.remove('hidden');
        } else {
            bigText.classList.remove('hidden');
            logoText.classList.add('hidden');
        }
    });
    
    window.addEventListener('scroll', (e) => {
        var scrollPos = window.scrollY;
        if (scrollPos >= header.offsetHeight) {
            header.classList.add('fixed');
        } else {
            header.classList.remove('fixed');
        }
    });
}

function openTab(tabName) {
    var i;
    var x = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
    this.classList.add('clicked');
}

//accordion
var accordionToggle = document.getElementsByClassName('accordion-header');
var i;

for (i = 0; i < accordionToggle.length; i++) {
    accordionToggle[i].addEventListener('click', function() {
        this.classList.toggle('opened');
    });
}

//show/hide navbar on scroll back
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        console.log('top0');
    } else {
        console.log('top--');
    }
    prevScrollpos = currentScrollPos;
}

//toggle menu opening
const hamburger = document.querySelector(".hamburger"),
      mobileMenu = document.querySelector('.mobile-menu');

hamburger.addEventListener("click", function() {
    console.log('hamburger clicked');
    hamburger.classList.toggle("is-active");
    mobileMenu.classList.toggle("is-active");
});