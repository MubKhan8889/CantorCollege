<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page of the Cantor College website shows you all courses that the college is currently offering.">
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
        <h1><b>COURSES</b></h1>
    </div>

     <!--This would serve as the body of the page-->
    <div id="content">
        <div class="content-large">
            <!--Computing courses-->
            <h2>Computing Courses</h2>
            <p>The College offers a range of courses to suit applicants with varying backgrounds and educational abilities. At undergraduate level, there are single BSc Honours Degree courses in Computing, Computer Networks, Software Engineering and Cyber Security with Forensics amongst others.</p>
            <br>
            <p>The College teaches undergraduate and postgraduate courses in a wide range of specialisms, including computer science, software development, information systems, networking and software engineering. It is at the heart of a passionate computing community, including student societies devoted to games development, digital forensics and programming.</p>
            <br>
            <p>The courses are British Computer Society accredited and are highly relevant to modern industry. They are designed to prepare students for professional occupations in Computing and related fields. Many graduates continue their studies to pursue a higher degree such as an MSc. or PhD.</p>
            <br>
            <!--Design courses-->
            <h2>Design Courses</h2>
            <p>The College is an internationally connected creative community of diverse disciplines housed under one roof. We shape our students' futures, preparing them to shape the world through applied knowledge and creativity.</p>
            <br>
            <p>The College's art and design courses don't just train you, they promote alternative ways of thinking, making and communicating; they provide you with space, tools and inspiration to develop your creative practice and a clear career path. You'll get expert teaching from active practitioners and researchers who will encourage you to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives.</p>
            <br>
            <p>You'll develop your creative practice whilst interacting with your peers in well-equipped studios, making and digital workshops. At the same time, you'll learn professional skills by working on applied briefs facilitated through our links with commercial clients, cultural institutions, businesses and organisations.</p>
            <br>
            <!--Courses-->
            <h2>Courses</h2>
            <p>This section lists out the courses you can do in Cantor College, alongside other info you may want to know about the course.</p>
            <br>
            <?php
                require_once("includes/config.php");
                $queryCourses = "SELECT * FROM courses_list";
                $coursesResult = $mysqli->query($queryCourses);

                while ($obj = $coursesResult->fetch_object()) {
                    if ($obj->NoLongerRecruiting === "false") {
                        echo "<h4>{$obj->CourseTitle}</h4>";
                        echo "<p>{$obj->CourseSummary}</p>";
                        echo "<br>";
                        echo "<p>Course Type: {$obj->CourseType}</p>";
                        echo "<p>Course Award Name: {$obj->CourseAwardName}</p>";
                        echo "<p>Course Subject: {$obj->CourseSubject}</p>";
                        echo "<br>";
                        echo "<p>Ucas Code: {$obj->UcasCode}</p>";
                        echo "<p>Ucas Points: {$obj->UcasPoints}</p>";
                        echo "<br>";
                        echo "<p>Year of Entry: {$obj->YearOfEntry}</p>";
                        echo "<p>Study Length: {$obj->StudyLength}</p>";
                        echo "<p>Mode of Attendance: {$obj->ModeOfAttendance}</p>";
                        echo "<br>";
                    }
                }
            ?>
        </div>
    </div>

    <?php
        include("includes/footer.html");
    ?>
</body>
</html>