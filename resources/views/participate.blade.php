<!DOCTYPE html>

<?php
    include_once $_SERVER['DOCUMENT_ROOT']. '../php/config.php';
    $db = mysqli_connect($myhost, $myuser, $mypw, $mydbname)
    or die("Error connecting to $myhost");
    unset ($myhost, $myuser, $mypw, $mydbname);
?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Participate</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
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
            <li><a href="/participate" class="active">Participate</a></li>
            <li><a href="/resources" class="not-active">Resources</a></li>
            <li><a href="/donate" class="not-active">Donate</a></li>
            <li><a href="/contact" class="not-active">Contact</a></li>
        </ul>
        <div class="menu">
            <h4>Menu</h4>
        </div>
    </nav>

    <main class="main-participate transition-fade" id="swup">
        <div class="findLocations">
            <div class="findLocations__content" id="findLocations__content">
                <div class="findLocations__content_title">Get Involved</div>
                <div class="findLocations__content_text">Find a participating nursing home or personal care facility in
                    need
                    nearest
                    to you with your zip code</div>
                <a class="findLocations__content_button" href="#scrollLocation" onclick="showPosition();">Find
                    Locations</a>
            </div>
        </div>

        <div class="scrollLocation" id="scrollLocation"></div>

        <div class="enterZip" id="enterZip">
            <img class="enterZip__svg" src="../svg/magGlass.svg">
            <input class="enterZip__form no-text-form" id="enterZip__form" placeholder="Enter Zip" name="zip"
                type="input" required pattern="[0-9]{5}" maxlength="5" onkeypress="return isNumber(event);"
                onkeyup="filterLocations();" value="" autocomplete="off"></input>
            <label class="enterZip__label no-text-label" id="enterZip__label" for="zip">Enter Zip</label>
        </div>

        <div class="table-container">
            <table id="myTable">
                <thead>
                    <tr>
                        <th>Nursing Home</th>
                        <th>Needs</th>
                        <th>Address</th>
                        <th>Zip Code</th>
                        <th>Preferred Mask Type</th>
                        <th>Mask Fabric Preference</th>
                        <th>Mailing Address</th>
                        <th>Other Information</th>
                        <th>Donate Masks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $result = mysqli_query($db, "SELECT Name, Needs, Address, `Zip Code`, `Mask Type`, `Mask Fabric`, `Mailing Address`, `Other Information`, `Donate` from final");
                
                while ($row = $result->fetch_assoc())
                {
                echo "<tr>";
                    $counter = 0;
                    $colNames = ["Nursing Home", "Needs", "Address", "Zip Code", "Mask Type", "Mask Fabric", "Mailing Address", "Other Information", "Donate Masks"];
                    foreach($row as $value) {
                        if ($colNames[$counter] == "Other Information") {
                            echo "<td><span>$colNames[$counter]</span> <a class='alert' data-text='$value' data-content='More Information' onclick='otherInfoAlert(this);'>More Information</a></td>";
                        } 
                        else if ($colNames[$counter] == "Donate Masks") {
                            echo "<td><span>$colNames[$counter]</span> <button class='donate-button' data-content='Donate' href='#'>Donate</button></td>";
                        } 
                        else if ($colNames[$counter] == "Nursing Home") {
                            echo "<td><span id='nursingHomeTab'>$colNames[$counter]</span> $value</td>";
                        }
                        else {
                            echo "<td><span>$colNames[$counter]</span> $value</td>";
                        }
                        ++$counter;
                    }
                echo "</tr>";

                }
                ?>
                </tbody>
            </table>
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
</body>