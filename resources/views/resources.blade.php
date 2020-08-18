<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Resources</title>
    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
</head>

<body>
    <nav class="nav">
        <a href="/"><img class="nav__logo" src="../img/tempLogo.png" alt="Temporary Logo"></a>
        <ul class="nav__links">
            <li><a href="/" class="not-active">Home</a></li>
            <li><a href="/about" class="not-active">About</a></li>
            <li><a href="/participate" class="not-active">Participate</a></li>
            <li><a href="/resources" class="active">Resources</a></li>
            <li><a href="/donate" class="not-active">Donate</a></li>
            <li><a href="/contact" class="not-active">Contact</a></li>
        </ul>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </nav>

    <main class="main-resources">
        <div class="resources">
            <h1 class="resources__title">Resources</h1>
            <p class="resources__text">Find links to valuable resources including mask patterns, sewing tutorials,
                COVID-19 information, relevant news articles, and more</p>
        </div>

        <div class="container-info">
            <div class="covidInformation">
                <h2 class="covidInformation__title">Coronavirus Information</h2>
                <p class="covidInformation__text"><span class="covidInformation__text_link"><a
                            href="https://www.health.pa.gov/topics/disease/coronavirus/Pages/Coronavirus.aspx"
                            data-content="The
                        Pennsylvania Department of
                        Health" target="_blank">The
                            Pennsylvania Department of
                            Health</a>
                    </span> has a wealth of
                    information on COVID-19, how to protect yourself, and even how to make masks </p>
                <p class="covidInformation__text"><span class="covidInformation__text_link"><a target="_blank"
                            href="https://www.cdc.gov/" data-content="Centers for Disease
                        Control">Centers for Disease
                            Control</a></span> has guidelines and relevant
                    news pertaining to COVID-19 and all aspects of the response </p>
                <p class="covidInformation__text"><span class="covidInformation__text_link"><a target="_blank"
                            href="https://coronavirus.jhu.edu/" data-content="Johns Hopkins University">Johns Hopkins
                            University</a></span>
                    has some of the best data on
                    COVID-19 out there, with other valuable resources like articles exploring data, and credible news
                </p>
                <p class="covidInformation__text"><span class="covidInformation__text_link"><a target="_blank"
                            href="http://www.healthdata.org/" data-content="The Institute for Health Metrics
                        and Evaluation">The Institute for Health Metrics
                            and Evaluation</a></span> has COVID-19
                    data and estimates that are being regularly updated </p>
            </div>
        </div>

        <div class="videos">
            <div class="videos__noSew" id="videos__noSew">
                <video controls id="noSewVideo" class="video-js vjs-big-play-button"
                    poster="../img/mask-poster-dark.png"
                    data-setup='{"controls": true, "autoplay": false, "preload": "auto", "fluid": true}'>
                    <source src="../vid/no-sew.mp4" type="video/mp4">
                </video>
                <h3 class="videos__noSew_text">No-Sew Mask Tutorial</h3>
            </div>
            <div class="videos__separate"></div>
            <div class="videos__sew" id="videos__sew">
                <video controls id="sewVideo" class="video-js vjs-big-play-button"
                    poster="../img/no-mask-poster-dark.png"
                    data-setup='{"controls": true, "autoplay": false, "preload": "auto", "fluid": true}'>
                    <source src="../vid/sew.mp4" type="video/mp4">
                </video>
                <h3 class="videos__sew_text">Sewing Mask Tutorial</h3>
            </div>
        </div>

        <div class="container-mask">
            <div class="otherInformation">
                <h2 class="otherInformation__title">Other Information</h2>
                <p class="otherInformation__text"><span class="otherInformation__text_link"><a target="_blank"
                            href="https://www.idiadega.com/1-tee-3-masks-diy.html"
                            data-content="DIY Mask from T-Shirt">DIY Mask from T-Shirt</a></span></p>
                <p class="otherInformation__text"><span class="otherInformation__text_link"><a target="_blank"
                            href="https://www.michaels.com/online-experiences/diy-face-masks-and-shields/diy-face-masks-and-shields"
                            data-content="DIY
                            Mask Instructions and Resources">DIY
                            Mask Instructions and Resources</a></span></p>
                <p class="otherInformation__text"><span class="otherInformation__text_link"><a target="_blank"
                            href="https://med.stanford.edu/news/all-news/2020/06/stanford-scientists-contribute-to-who-mask-guidelines.html"
                            data-content="Effectiveness
                            of Masks">Effectiveness
                            of Masks</a></span></p>
            </div>
        </div>

        <div class="otherGroups">
            <h3 class="otherGroups__title">Other Mask Groups</h3>
            <p class="otherGroups__text"><span class="otherGroups__text_link"><a target="_blank"
                        href="https://www.radianthall.org/" data-content="Radiant Hall">Radiant Hall</a></span></p>
            <p class="otherGroups__text"><span class="otherGroups__text_link"><a target="_blank"
                        href="https://www.buildanest.org/" data-content="Build A Nest">Build A
                        Nest</a></span></p>
            <p class="otherGroups__text"><span class="otherGroups__text_link"><a target="_blank"
                        href="https://operationfacemask.com/" data-content="Operation Face Mask">Operation Face
                        Mask</a></span></p>
            <p class="otherGroups__text"><span class="otherGroups__text_link"><a target="_blank"
                        href="https://knotzland.com/" data-content="KnotzLand">KnotzLand</a></span></p>
        </div>

        <footer class="footerMain">
            <h2 class="footerMain__title">&copy Nursing Home Mask Initiative</h2>
            <div class="footerMain__svg">
                <a href="#"><img src="../svg/instagram.svg" alt="Instagram Icon" class="footerMain__svg_instagram"></a>
                <a href="#"><img src="../svg/twitter.svg" alt="Twitter Icon" class="footerMain__svg_twitter"></a>
                <a href="#"><img src="../svg/facebook.svg" alt="Facebook Icon" class="footerMain__svg_facebook"></a>
            </div>
        </footer>
    </main>

    <script src="../js/app.js"></script>
    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
</body>