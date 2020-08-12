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

const textCheck = () => {
    var form = document.getElementById("enterZip__form");
    var label = document.getElementById("enterZip__label");
    form.addEventListener("input", function () {
        if (form.value.length !== 0) {
            form.classList.remove("no-text-form");
            form.classList.add("has-text-form");
            label.classList.remove("no-text-label");
            label.classList.add("has-text-label");
        } else {
            form.classList.remove("has-text-form");
            form.classList.add("no-text-form");
            label.classList.remove("has-text-label");
            label.classList.add("no-text-label");
        }
    });
};

function isNumberKey(evt) {
    var charCode = evt.which ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
    return true;
}

navSlide();
stickyNav();
textCheck();
