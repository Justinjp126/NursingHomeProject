<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
        <title>Home</title>
    </head>
    <body>
        <nav class="nav">
            <img class="nav__logo" src="../img/tempLogo.png" alt="Temporary Logo">
            <ul class="nav__links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Participate</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Donate</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="menu"><h4>Menu</h4></div>
        </nav>

        <div class="hero">
            <div class="hero__textContainer">
                <h2 class="hero__textContainer_title">Nursing Home Mask Initiative</h2>
                <p class="hero__textContainer_text">Nursing home residents and caretakers need masks. It’s up to <span class="hero__textContainer_text-bold">us</span> to help.</p>
             </div>
            <a class="hero__btn" href="#">Learn More</a>
        </div>

        <div class="arrow">
            <h4 class="arrow__text">More</h4>
            <svg viewBox="0 0 65 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="33" y1="32.6985" x2="62.6985" y2="3.00002" stroke="#4B2073" stroke-width="3" stroke-linecap="round"/>
                <line x1="2.12132" y1="3" x2="31.8198" y2="32.6985" stroke="#4B2073" stroke-width="3" stroke-linecap="round"/>
            </svg>                
        </div>
        <script src="../js/app.js"></script>
    </body>
</html>
