<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.php" class="logo">
                <img src="images/logo.png" alt="SPVS School Logo">
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="/collegewebsite/blog.php">BLOG</a></li>
                    <li><a href="/collegewebsite/contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Our Courses</h1>
    </section>
    <!-- -----------------------Course----------- -->
    <section class="course">
        <h1>Course We Offer</h1>
        <p>
            "Explore our wide range of courses designed to enhance your skills and knowledge, from beginner to advanced
            levels, across various fields like technology, business, and language."</p>

        <div class="row">
            <div class="course-col">
                <h3>Ninth classes</h3>
                <p>
                    Our Ninth Class courses offer a strong foundation in key subjects to prepare students for academic
                    success.
            </div>
            <div class="course-col">
                <h3>Tenth Classes</h3>
                <p>Focused Tenth Class courses designed to prepare students for board exams and academic excellence.</p>
            </div>
            <div class="course-col">
                <h3>Eleventh Classes</h3>
                <p>Specialized Eleventh Class courses aimed at deepening subject knowledge and preparing for higher
                    education.</p>
            </div>
            <div class="course-col">
                <h3>Twelth Classes</h3>
                <p>"Advanced Twelfth Class courses to excel in final exams and prepare for higher education or career
                    opportunities.</p>
            </div>
        </div>

    </section>

    <!-- -----fcilities------------------- -->

    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Our facilities include advanced classrooms, fully equipped labs, a comprehensive library, and recreational
            areas, all designed to enhance the learning experience and support student development..</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/library.png">
                <h3>Our library Section</h3>
                <p>Our library section offers a diverse collection of books and resources to enhance learning and foster
                    a love for reading</p>
            </div>
            <div class="facilities-col">
                <img src="images/basketball.png">
                <h3>Largest Hall Section</h3>
                <p>Our largest hall section is equipped for events, assemblies, and gatherings, providing ample space
                    for school activities.</p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.png">
                <h3>Our food Section</h3>
                <p>Our food section offers nutritious and delicious meals to keep students energized and focused
                    throughout the day.</p>
            </div>
        </div>
    </section>

    <!-- -------------------Footer------------->
    <section class="footer">
        <h4>About Us</h4>
        <p>At our school, we are committed to providing a holistic education that fosters academic excellence and
            personal growth. <br>Our dedicated staff, state-of-the-art facilities, and supportive environment create a
            dynamic learning experience. We strive to empower students to achieve their fullest potential and become
            well-rounded <br>
            Architecto voluptas dolorum id consectetur unde.</p>
        <div class="icons">
            <a href="https://www.facebook.com/profile.php?id=100070895658794"><i class="fa fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/_aniket_singh_19?igsh=MXJ3eDRwMmljeWM1eA=="><i
                    class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/aniketkumar03/"><i class="fa fa-linkedin"></i></a>
            <i class="fa fa-telegram"></i>
        </div>
        <p>Made With <i class="fa fa-pencil"></i> by ANIKET SINGH</p>
    </section>



    <!-- -----------------------JvaScript for tooggle Menu------ -->
    <script>

        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }

    </script>

</body>

</html>