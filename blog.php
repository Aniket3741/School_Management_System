<?php
include 'conn.php'; 

if (isset($_POST['blog'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `blog_table`(`name`, `email`, `comment`, `created_at`) VALUES ('$name', '$email', '$comment', CURRENT_TIMESTAMP())";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Message Send Successfully for Blog";
    }
    else{
        echo "Not SuccessFully blog comment";
    }
}
?>


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
        <h1>Our Certificate & Online Programs </h1>
    </section>


    <!-- ----------------blog page content------------- -->

    <section class="blog-content">

        <div class="row">
            <div class="blog-left">
                <img src="images/certificate.jpg">
                <h2>Our Certificate & Online Programs</h2>
                <p>Technology: Engaging courses in coding, web development, and computer fundamentals</p>
                <br>
                <p>Business: Practical programs in project management, entrepreneurship, and leadership.
                </p>
                <br>
                <p>Healthcare: Introductory courses in health sciences and wellness.
                </p>
                <br>
                <p>Creative Arts: Creative classes in digital media, art, and writing.</p>

                <div class="comment-box">
                    <h3>Leave a comment</h3>

                    <form action="" method="post" class="comment-form">
                        <input type="text" name="name" placeholder="Enter Name" required>
                        <input type="email" name="email" placeholder="Enter Email" required>
                        <textarea rows="5" name="comment" placeholder="Your comment" required></textarea>
                        <button type="submit" name="blog" class="hero-btn red-btn">POST comment</button>
                    </form>
                    
                    
                    
                </div>

            </div>
            <div class="blog-right">
                <h3>Post Categories</h3>
                <div>
                    <span>Bussiness Analytics</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Data Analytics</span>
                    <span>24</span>
                </div>
                <div>
                    <span>Machine Learning</span>
                    <span>14</span>
                </div>
                <div>
                    <span>Computer Science</span>
                    <span>20</span>
                </div>
                <div>
                    <span>Commerce</span>
                    <span>42</span>
                </div>
                <div>
                    <span>AutoCAD</span>
                    <span>30</span>
                </div>
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
        <p>Made With <i class="fa fa-pencil"></i>by ANIKET SINGH</p>
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