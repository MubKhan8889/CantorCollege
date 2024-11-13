<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is the homepage for the Cantor College website.">
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
        <h1><b>WELCOME TO CANTOR COLLEGE</b></h1>
        <h1><b>REACH YOUR POTENTIAL</b></h1>
    </div>

     <!--This would serve as the body of the page-->
    <div id="content">
        <div class="content-small">
            <h2>Home</h2>
            <p>This is the homepage of Cantor College, a college dedicated to helping students in field relating to Computing, Computer Networks, Software Engineering and Cyber Security.</p>
            <br>
            <img src="images/IMG8Cropped.jpeg" alt="Students in a room" class="images-horizontal">
        </div>
        <div class="link-to-section">
            <h2>Courses</h2>
            <img src="images/IMG2Cropped.jpeg" alt="Students in a room" class="images-horizontal">

            <p>The College offers a range of courses to suit applicants with varying backgrounds and educational abilities. At undergraduate level, there are single BSc Honours Degree courses in Computing, Computer Networks, Software Engineering and Cyber Security with Forensics amongst others.</p>

            <button onclick="window.location.replace('courses.php')" aria-label="Button to take you to a list of courses."><b>GO TO COURSES</b></button>
        </div>
    </div>

    <?php
        include("includes/footer.html");
    ?>
</body>
</html>