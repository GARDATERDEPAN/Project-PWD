<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>

    <header class="header">
        <a href="#" class="logo">Aaron.</a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#experience">Experience</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="home" id="home">

        <img src="Images/home.jpg" alt="Background Image" class="background-image">

        <div class="home-content">
            <h1>Hi, I'm <span>Aaron Marthin</span></h1>
            <div class="text-animate">
                <h3>A College Student</h3>
            </div>
            <p>Of Samarinda State Agricultural Polytechnic</p>

            <div class="btn-box">
                <a href="#" class="btn">Hire Me</a>
                <a href="#" class="btn">Let's Talk</a>
            </div>
        </div>

        <div class="home-sci">
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-whatsapp'></i></a>
        </div>

        <div class="home-imgHover"></div>
    </section>

    <section class="about" id="about">
        <h2 class="heading">About <span>Me</span></h2>

        <div class="about-img">
            <img src="Images/about.jpg" alt="">
            <span class="circle-spin"></span>
        </div>

        <div class="about-content">
            <h3>Christopher Aaron Marthin Goewanto</h3>
            <p>H224600476</p>

            <div class="btn-box btns">
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <section class="education" id="education">
        <h2 class="heading">My <span>Journey</span></h2>

        <div class="education-row">
            <div class="education-column">


                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2010 - 2016 </div>
                            <h3>Assisi Elementary School</h3>
                            <p>All Subjects</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2016 - 2019 </div>
                            <h3>Assisi Junior High School</h3>
                            <p>All Subjects</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2019 - 2022 </div>
                            <h3>Assisi Senior High School</h3>
                            <p>Science Major</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2022 </div>
                            <h3>Samarinda State Agricultural Polytechnic</h3>
                            <p>Software Engineering Technology</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experience" id="experience">
        <h2 class="heading">My <span>Experience</span></h2>
            <div class="experience-row">
                <div class="experience-column">
                <?php
                    require 'koneksi.php';
                    $no = 1;
                    $result = mysqli_query($conn, "SELECT * FROM experience");

                    while ($row = mysqli_fetch_array($result)) {
                        echo "
                        <div class='experience-content'>
                        <div class='content'>
                        <div class='year'><i class='bx bxs-calendar'></i>{$row['year']}</div>
                        <h3>{$row['name']}</h3>
                        <p>{$row['position']}</p>
                        </div>
                    </div>
                    <br>";
                    }
                ?>
            </div>
        </div>
    </section>



    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="contact.php" method="POST">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="fullname" placeholder="Full Name" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="email" placeholder="Email" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" name="number" placeholder="Mobile number" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="textarea-field">
                <textarea name="comment" id="" cols="30" rows="10" placeholders="Your Message" required></textarea>
                <span class="focus"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy;2023 by Aaron | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

</body>

</html>