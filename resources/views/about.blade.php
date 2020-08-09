<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>About</title>
</head>

<body>
    <nav class="nav">
        <img class="nav__logo" src="../img/tempLogo.png" alt="Temporary Logo">
        <ul class="nav__links">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/participate">Participate</a></li>
            <li><a href="/resources">Resources</a></li>
            <li><a href="/donate">Donate</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </nav>
    <main class="main-about">

        <div class="aboutUs">
            <div class="aboutUs__title">About Us</div>
            <div class="aboutUs__text">The COVID-19 Mask Initiative was created by and run by high school
                students
                in
                the Pittsburgh area. Our goal is to mobilize local sewers and crafters to make masks for nursing
                homes
                and personal care facilities in need of supplies, and save lives.</>
            </div>
            <img class="aboutUs__image" src="../img/masksLarge.png" alt="Sewing Machine Large">
        </div>

        <div class="container">
            <div class="ourTeam">
                <div class="ourTeam__title">Our Team</div>
                <div class="ourTeam__person">
                    <div class="ourTeam__person_container">
                        <img class="ourTeam__person_container-svg" src="../svg/lydia.svg" id="lydiaSvg">
                        <div class="ourTeam__person_container-title">Lydia Berger
                            <div class="ourTeam__person_container-title-school">Rising Senior at
                                Norwin High School</div>
                        </div>

                    </div>
                    <div class="ourTeam__person_paragraph">Before this project, Lydia’s primary programming experience
                        was in
                        Python and Haskell. However, after the COVID-19 crisis began, she decided to learn HTML and CSS
                        to
                        create the original site and make a difference. She met Amish Sethi through the Pittsburgh
                        COVID-19
                        DataWorks Project, and they decided to team up to work on the project. Her goal is to help
                        nursing
                        homes in the Pittsburgh area and beyond.</div>
                </div>
                <div class="ourTeam__person">
                    <div class="ourTeam__person_container">
                        <img class="ourTeam__person_container-svg" src="../svg/amish.svg" id="amishSvg">
                        <div class="ourTeam__person_container-title">Amish Sethi<div
                                class="ourTeam__person_container-title-school">Rising Junior at
                                Pine-Richland High School</div>
                        </div>

                    </div>
                    <div class="ourTeam__person_paragraph">Amish has been coding since he was nine and has a passion for
                        using his coding knowledge to good use. He met Lydia during the Pittsburgh Covid-19
                        DataWorks
                        Project, an online and collaborative data science project hosted by the University of
                        Pittsburgh.
                        After meeting, they decided to work together to help nursing homes in the Pittsburgh area.</div>
                </div>
                <div class="ourTeam__person">
                    <div class="ourTeam__person_container">
                        <img class="ourTeam__person_container-svg" src="../svg/justin.svg" id="justinSvg">
                        <div class="ourTeam__person_container-title">Justin
                            Puthenpurayil
                            <div class="ourTeam__person_container-title-school">Rising Junior at
                                Pine-Richland High School</div>
                        </div>

                    </div>
                    <div class="ourTeam__person_paragraph">Justin learned how to write HTML and CSS in his freshman year
                        of
                        high school. He was brought in to work on this project by his friend Amish, and he has been
                        helping
                        revamp the original website created Lydia. He hopes to see this website help nursing homes get
                        masks
                        and become a better web developer through this project. </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <h2 class="footer__title">&copy Nursing Home Mask Initiative</h2>
            <div class="footer__svg">
                <a href="#"><img src="../svg/instagram.svg" alt="Instagram Icon" class="footer__svg_instagram"></a>
                <a href="#"><img src="../svg/twitter.svg" alt="Twitter Icon" class="footer__svg_twitter"></a>
                <a href="#"><img src="../svg/facebook.svg" alt="Facebook Icon" class="footer__svg_facebook"></a>
            </div>
        </footer>
    </main>

    <script src="../js/app.js"></script>
</body>

</html>