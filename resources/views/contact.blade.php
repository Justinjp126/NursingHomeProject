<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Contact</title>
    <script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script src="../js/SwupOverlayTheme.js"></script>
    <script defer src="../js/swup.js"></script>
</head>

<body>
    <nav class="nav">
        <a href="/"><img class="nav__logo" src="../img/tempLogo.png" alt="Temporary Logo"></a>
        <ul class="nav__links">
            <li><a href="/" class="not-active">Home</a></li>
            <li><a href="/about" class="not-active">About</a></li>
            <li><a href="/participate" class="not-active">Participate</a></li>
            <li><a href="/resources" class="not-active">Resources</a></li>
            <li><a href="/donate" class="not-active">Donate</a></li>
            <li><a href="/contact" class="active">Contact</a></li>
        </ul>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </nav>
    <main class="main-contact transition-fade" id="swup">
        <div class="contact">
            <h1 class="contact__title">Contact</h1>
            <p class="contact__text">Nursing Home looking to participate? Question? Suggestion? </p>
        </div>

        <div class="contactForm">
            <div class="enterInfo" id="enterInfo">
                <input class="enterInfo__form no-text-form" id="enterInfo__form" placeholder="Name" type="input"
                    required value="" autocomplete="off"></input>
                <label class="enterInfo__label" id="enterInfo__label">Name</label>
            </div>
            <div class="enterInfo" id="enterInfo">
                <input class="enterInfo__form no-text-form" id="enterInfo__form" placeholder="Email" type="input"
                    required value="" autocomplete="off"></input>
                <label class="enterInfo__label" id="enterInfo__label">Email</label>
            </div>
            <div class="enterInfo" id="enterInfo">
                <textArea class="enterInfo__form no-text-form" id="enterInfo__form" placeholder="Message" type="input"
                    required value="" autocomplete="off"></textArea>
                <label class="enterInfo__label" id="enterInfo__label">Message</label>
            </div>

            <a class="enterButton">
                <h3 class="enterButton__text">Contact</h3>
            </a>
        </div>
    </main>
</body>