    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> SPVS School</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,600;1,700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <section class="header">
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
                        <!-- <li><a href="/collegewebsite/contact.php">CONTACT</a></li> -->
                        <li><a href="http://localhost/collegewebsite/contact.php">CONTACT</a></li>

                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <div class="text-box">
                <h1>SPVS MUBARAKPUR</h1>
                <p>The school and our students must transform societies and communities within which it exists
                    <br>or
                    The SPVS survives and thrives on disruptions and relevant innovations to co-create a holistic learning
                    ecosystem.
                </p>
                <a href="" class="hero-btn">Visit Us To Know More</a>
            </div>
        </section>
        <!-- course -->

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
        <!-- -------------------campus----------- -->
        <section class="campus">
            <h1>Campus</h1>
            <p>Our campus provides a vibrant and supportive environment for students to learn, grow, and succeed</p>
            <div class="row">
                <div class="campus-col">
                    <img src="images/newyork.png">
                    <div class="layer">
                        <h3>Mahnar Bazar</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="images/london.png">
                    <div class="layer">
                        <h3>Lawapur Bazar</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="images/washington.png">
                    <div class="layer">
                        <h3>Station Road</h3>
                    </div>
                </div>
            </div>

        </section>
        <!-- -------------Facilities-------------- -->
        <section class="facilities">
            <h1>Our Facilities</h1>
            <p>Our facilities include state-of-the-art classrooms, labs, and recreational areas to support a well-rounded
                educational experience.</p>
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

        <!-- ----------------------testimonials--------------- -->

        <section class="testimonials">
            <h1>What Our Student Says</h1>
            <p>The supportive environment and dedicated staff empower us to reach our full potential. We feel encouraged and
                inspired every day to achieve our best!</p>

            <div class="row">
                <div class="testimonial-col">
                    <img src="images/user1.jpg">
                    <div>
                        <p>SPVS School offers a vibrant learning community where students are encouraged to excel
                            academically and socially. Our innovative curriculum and supportive staff create an enriching
                            environment for personal development. We focus on preparing students for success both in and out
                            of the classroom.
                        </p>
                        <h3>Soni kumari</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <div class="testimonial-col">
                    <img src="images/user2.jpg">
                    <div>
                        <p>SPVS School provides a nurturing environment that fosters academic excellence and personal
                            growth. With a dedicated team of educators and a range of extracurricular activities, we prepare
                            students for a bright future. Our commitment to individualized attention ensures each student
                            reaches their full potential.
                        </p>
                        <h3>Aniket Singh</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------- calll to Action------------->
        <section class="cta">
            <h1>Enroll for Our Various Online Courses<br> Anyware From The Worlds</h1>
            <a href="contact.php" class="hero-btn">CONTACT US</a>

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
                <a href=""><i class="fa fa-telegram"></i></a>
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