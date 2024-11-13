<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page of the Cantor College website tells you where to find them and how you can contact them.">
    <title>Home - Cantor College</title>
    <link href="style/mobile.css" rel="stylesheet" type="text/css">
    <link href="style/desktop_small.css" rel="stylesheet" media="only screen and (min-width:850px)" defer>
    <link href="style/desktop.css" rel="stylesheet" media="only screen and (min-width:1200px)" defer>
    <script src="java/main.js" defer></script>
</head>
<body>
    <?php
        include("includes/header.html");
        include("includes/mobile-links.html");
    ?>
    
    <!--This would appear before the main content of the page-->
    <div id="before-content">
        <h1><b>WHERE TO FIND US</b></h1>
    </div>

     <!--This would serve as the body of the page-->
    <div id="content">
        <div class="content-small">
            <h2>Find us</h2>
            <ul>
                <p>Cantor College</p>
                <p>Main Street</p>
                <p>Sheffield</p>
                <p>SC4 2BB</p>
            </ul>
            <br>
            <h2>Contact us</h2>
            <ul>
                <p>Tel: (01321) 2340 235</p>
                <p>Fax: (01321) 2340 236</p>
                <p>Email: info@cantorcollege.ac.uk</p>
            </ul>
        </div>
        <div class="content-image-only">
            <img src="images/IMG12Cropped.jpeg" alt="Buildings near cantor college" class="images-horizontal">
        </div>
    </div>

    <?php
        include("includes/footer.html");
    ?>
</body>
</html>