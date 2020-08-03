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

navSlide();
