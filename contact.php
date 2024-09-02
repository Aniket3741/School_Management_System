<?php
include 'conn.php'; 

if (isset($_POST['contact'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_table`(`name`, `email`, `subject`, `message`, `created_at`) VALUES ('$name', '$email', '$subject', '$message', CURRENT_TIMESTAMP())";
    
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Message Send SuccessFully";
    }
    else{
        echo "Not SuccessFully";
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
        <h1>Contact Us</h1>
    </section>

    <!-- ------------ Contact Us------------ -->
    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14133.197586389816!2d85.4365412!3d26.7423825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDQ0JzMyLjYiTiA4NcKwMjYnMTQuNSJF!5e0!3m2!1sen!2sus!4v1592247162679!5m2!1sen!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>


    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5> new road Sudharshan Dham Mejorganj Sitamarhi</h5>
                        <p>Sitamarhi, Bihar </p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+91 94733274660</h5>
                        <p>Monday to saturday </p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>Aniket2021.23@gmail.com</h5>
                        <p>Email us your query </p>
                    </span>
                </div>
            </div>
            <div class="contact-col">

                <form action=" " method="post">
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <input type="text" name="subject" placeholder="Enter Your Subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" name="contact" class="hero-btn red-btn">Send Message</button>
                </form>

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
    <!-- <script>

        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }

    </script> -->

</body>

</html>