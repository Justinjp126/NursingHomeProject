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
                link.style.animation = `navLinkFade 400ms ease-out forwards ${index /
                    10 +
                    0.3}s`;
            }
        });
    });
};

/**
 * Checks if user scrolled and if so, changes the nav to w/o padding and sticky
 */
const stickyNav = () => {
    window.addEventListener("scroll", function() {
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
const isNumber = evt => {
    var charCode = evt.which ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
    return true;
};

/**
 * Creates Sweet Alert and animates it
 */
const otherInfoAlert = evt => {
    Swal.fire({
        title: "Other Information",
        html: evt.getAttribute("data-text"),
        showClass: {
            popup: "animate__animated animate__fadeIn animate__faster "
        },
        hideClass: {
            popup: "animate__animated animate__fadeOut animate__faster"
        },
        confirmButtonColor: "#4b2073"
    });
};

/**
 * Takes input and filters the graph based on input
 */
const filterLocations = () => {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue, thead;
    var oneVal = false;
    thead = document.getElementsByTagName("thead");
    input = document.getElementById("enterZip__form");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[3];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                oneVal = true;
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    if (oneVal === false) {
        for (i = 0; i < thead.length; i++) {
            thead[i].style.display = "none";
        }
    } else {
        for (i = 0; i < thead.length; i++) {
            thead[i].style.display = "revert";
        }
    }
};

/**
 * Takes user's lang and log if they allow it and then
 * finds their zip code using an API and filters the
 * table based on their zip code
 */
function showPosition() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            fetch(
                "https://us1.locationiq.com/v1/reverse.php?key=f27ddff8f0c0bf&lat=" +
                    position.coords.latitude +
                    "&lon=" +
                    position.coords.longitude +
                    "&format=json"
            ) // Call the fetch function passing the url of the API as a parameter
                .then(function(response) {
                    if (response.status !== 200) {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Status Code: " + response.status,
                            showClass: {
                                popup:
                                    "animate__animated animate__fadeIn animate__faster "
                            },
                            hideClass: {
                                popup:
                                    "animate__animated animate__fadeOut animate__faster"
                            }
                        });
                        return;
                    }

                    // Examine the text in the response
                    response.json().then(function(data) {
                        postalCode = data.address.postcode;
                        input = document.getElementById("enterZip__form");
                        input.value = postalCode;
                        filterLocations();
                    });
                })
                .catch(function(err) {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Status Code: " + err,
                        showClass: {
                            popup:
                                "animate__animated animate__fadeIn animate__faster "
                        },
                        hideClass: {
                            popup:
                                "animate__animated animate__fadeOut animate__faster"
                        }
                    });
                });
        });
    } else {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Sorry, your browser doesn't not support HTML5 Geolocation",
            showClass: {
                popup: "animate__animated animate__fadeIn animate__faster "
            },
            hideClass: {
                popup: "animate__animated animate__fadeOut animate__faster"
            }
        });
    }
}

/**
 * Remove Text from video on click
 */
const disableButtons = () => {
    var noSewText = document.querySelector(".videos__noSew_text");
    var sewVideoText = document.querySelector(".videos__sew_text");
    var noSewVideo = document.getElementById("videos__noSew");
    var sewVideo = document.getElementById("videos__sew");

    noSewVideo.addEventListener("click", function() {
        noSewText.style.display = "none";
    });
    noSewVideo.addEventListener("touchstart", function() {
        noSewText.style.display = "none";
    });
    sewVideo.addEventListener("click", function() {
        sewVideoText.style.display = "none";
    });
    sewVideo.addEventListener("touchstart", function() {
        sewVideoText.style.display = "none";
    });
};

navSlide();
stickyNav();
disableButtons();
