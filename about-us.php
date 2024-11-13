<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the 'About us' section for the Cantor College website.">
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
        <h1><b>ABOUT US</b></h1>
    </div>

     <!--This would serve as the body of the page-->
    <div id="content">
        <div class="content-small">
            <h2>About us</h2>
            <p>Cantor College was established in 1989 to specialize in Computing and Design. At Cantor College, we want to give students the education they need to achieve their career aims, leaving them equipped with the knowledge, skills and experience to succeed. Cantor College gives you the opportunities that can give you the edge when you enter the world of work, through our teaching and our links to some of the world's leading researchers and employers.</p>
            <br>
            <p>Our students have gone on to successful careers in a wide range of industries across the globe. Whatever your ambitions, our learning and support can help to get the most out of your time with Cantor College, both as a student and in your future career.</p>
        </div>
        <div class="content-image-only">
            <img src="images/IMG9Cropped.jpeg" alt="Building, I'm not really sure what building it is" class="images-horizontal">
        </div>
    </div>

    <?php
        include("includes/footer.html");
    ?>
</body>
</html>