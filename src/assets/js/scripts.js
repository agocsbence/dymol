//toggle menu opening
var mobileMenuToggle = document.querySelector('#mobileMenuToggler');
var mobileMenuClose = document.querySelector('#mobileMenuClose');
var header = document.querySelector('header');

let bigText = document.querySelector('#bigText'),
    logoText = document.querySelector('#logoText'),
    triggerPos = window.innerHeight - bigText.offsetHeight;

console.log(header.offsetHeight);

    
window.addEventListener('scroll', (e) => {
    var scrollPos = window.scrollY;
    if (scrollPos >= triggerPos) {
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

// mobileMenuToggle.addEventListener('click', function() {
//     navbar.classList.add('opened');
// });
// mobileMenuClose.addEventListener('click', function() {
//     navbar.classList.remove('opened');
// });

//show/hide navbar on scroll back
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//     var currentScrollPos = window.pageYOffset;
//     if (prevScrollpos > currentScrollPos) {
//         document.getElementById("header").style.top = "0";
//     } else {
//         document.getElementById("header").style.top = "-9rem";
//     }
//     prevScrollpos = currentScrollPos;
// }