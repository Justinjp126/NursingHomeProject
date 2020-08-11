<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Participate</title>
</head>

<body>
    <nav class="nav">
        <img class="nav__logo" src="../img/tempLogo.png" alt="Temporary Logo">
        <ul class="nav__links">
            <li><a href="/" class="not-active">Home</a></li>
            <li><a href="/about" class="not-active">About</a></li>
            <li><a href="/participate" class="active">Participate</a></li>
            <li><a href="/resources" class="not-active">Resources</a></li>
            <li><a href="/donate" class="not-active">Donate</a></li>
            <li><a href="/contact" class="not-active">Contact</a></li>
        </ul>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </nav>
    <main class="main-participate">
        <div class="findLocations">
            <div class="findLocations__content">
                <div class="findLocations__content_title">Get Involved</div>
                <div class="findLocations__content_text">Find a participating nursing home or personal care facility in
                    need
                    nearest
                    to you with your zip code</div>
                <a class="findLocations__content_button" href="#">Find Locations</a>
            </div>
        </div>

        <div class="enterZip">
            <div class="enterZip__text">Enter Zip</div>
            <img class="enterZip__svg" src="../svg/magGlass.svg">
            <label for="enterZip__form">
                <input class="enterZip__form" id="enterZip__form" name="zip" type="text" pattern="[0-9]{5}"
                    placeholder="&nbsp;"></input>
            </label>
        </div>

    </main>

    <script src="../js/app.js"></script>
</body>