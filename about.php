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
        <h1>About Us</h1>
    </section>

    <!-- ------------about us content------------ -->
    <section class="about-us">

        <div class="row">
            <div class="about-col">
                <h1>We Are The Best School In Our Area</h1>
                <p>We are proud to be the top school in our area, offering exceptional education and a nurturing
                    environment. Our commitment to excellence sets us apart and drives student success.</p>
                <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="images/about.jpg">
            </div>
        </div>
    </section>

    <!-- -------------------Footer------------->
    <section class="footer">
        <h4>About Us</h4>
        <p>At our school, we blend academic rigor with a supportive environment to inspire student success. Our
            dedicated team of educators and modern facilities foster a love for learning and personal growth. <br>We are
            committed to shaping well-rounded individuals prepared for future challenges
        </p>
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