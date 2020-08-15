/**
 * Slides out the menu when you press menu on mobile/small screens
 */
const navSlide = () => {
    const menu = document.querySelector(".menu");
    const nav = document.querySelector(".nav__links");
    const navLinks = document.querySelectorAll(".nav__links li");
    menu.addEventListener("click", () => {
        //toggle
        nav.classList.toggle("nav--active");

        //animate
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = `navLinkFade 400ms ease-out forwards ${
                    index / 10 + 0.3
                }s`;
            }
        });
    });
};

/**
 * Checks if user scrolled and if so, changes the nav to w/o padding and sticky
 */
const stickyNav = () => {
    window.addEventListener("scroll", function () {
        if (window.scrollY == 0) {
            var nav = document.getElementsByClassName("nav");
            for (var i = 0; i < nav.length; i++) {
                nav[i].classList.remove("scrolling");
            }
        } else {
            var nav = document.getElementsByClassName("nav");
            for (var i = 0; i < nav.length; i++) {
                nav[i].classList.add("scrolling");
            }
        }
    });
};

/**
 * Checks if Enter Zip input is only a number
 */
const isNumber = (evt) => {
    var charCode = evt.which ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
    return true;
};

document
    .querySelector(".findLocations__content_button")
    .addEventListener("click", function () {
        Swal.fire("Our First Alert");
        console.log("clicked");
    });

navSlide();
stickyNav();
