<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My profesnal portfolio for profesnal using .">
    <meta name="keywords" content="Personal Details , Carrer Details , About Information , Project Work ">
    <meta name="auther" content="Prince Makavana">
    <title>Prince Makavana</title>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/default.css">
    <link id="theme-style" rel="stylesheet" href="">
    <link rel="icon" href="images/profile.jpeg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php
    $mysql_host = 'fdb27.biz.nf';
    $mysql_user = '3531454_user';
    $mysql_pass = 'Mg6)n@e;9aRX_0H%';
    $conn_error = 'could not connect with server';
    $mysql_db = '3531454_user';

    $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
    if ($mysqli->connect_errno) {
        echo $conn_error . $mysqli->connect_error;
        exit();
    }
    ?>
</head>

<body>
    <section class="s1">
        <div class="main-container">
            <div class="greeting-wrapper">
                <h1>Hi , I am Prince Makavana </h1>
            </div>
            <div class="intro-wrapper">
                <div class="nav-wrapper">
                    <div class="dots-wrapper">
                        <div id="dot1" class="browser-dot"></div>
                        <div id="dot2" class="browser-dot"></div>
                        <div id="dot3" class="browser-dot"></div>
                    </div>
                    <ul id="navigation">
                        <li>
                            <!-- <a href="#">Contect</a> -->
                        </li>
                    </ul>

                </div>
                <div class="left-column">
                    <img src="images/profile.jpeg" id="profile_pic" alt="">
                    <h5 style="text-align: center; line-height: 0;">Personalize Theme</h5>

                    <div id="theme-options-wrapper">
                        <div data-mode="light" id="light-mode" class="theme-dot"></div>
                        <div data-mode="blue" id="blue-mode" class="theme-dot"></div>
                        <div data-mode="green" id="green-mode" class="theme-dot"></div>
                        <div data-mode="purple" id="pruple-mode" class="theme-dot"></div>
                    </div>
                    <p id="settings-note">Change Theme <br>For your next visit </p>
                </div>
                <div class="right-column">
                    <div id="preview-shadow">
                        <div id="preview">
                            <div id="corner-tl" class="corner"></div>
                            <div id="corner-tr" class="corner"></div>

                            <h3>What i Do</h3>
                            <p>Right Now , I am Student and CodeChef Compititive Programming Leader at GEC-R. </p>

                            <div id="corner-br" class="corner"></div>
                            <div id="corner-bl" class="corner"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="s2">
        <div class="main-container">
            <div class="about-wrapper">
                <div class="about-me">
                    <h4>More About Me</h4>
                    <p> I am studying Computer Engineering at GOVERNMENT ENGINEERING COLLEGE, RAJKOT 020, Skilled in LARAVEL, HTML-5, CSS, SCSS, PHP, Java-Script. continue future in web development as a full-stack developer. </p>
                    <p> Right Now, I am a CodeChef competitive programming leader at GEC-Rajkot.</p>

                    <hr>
                    <h4>Top Expertise</h4>
                    <p>Web Developer with primary focus on PHP + Laravel <a target="_blank" href="Prince_Resume.pdf">Download Resume</a></p>

                    <div id="skills">
                        <ul>
                            <li>C Programming</li>
                            <li>CSS,sass</li>
                            <li>LARAVEL</li>
                            <li>MySQL</li>
                        </ul>

                        <ul>
                            <li>HTML-5</li>
                            <li>PHP</li>
                            <li>WordPress</li>
                            <li>Codeigniter</li>
                        </ul>
                    </div>
                </div>
                <div class="social-links">
                    <img src="images/contect.png" alt="" id="social_img">
                    <h3>Find Me On linked-in & Instagram</h3>
                    <a target="_blank" href="https://www.linkedin.com/in/PrinceMakavana61/">Linked-in :- Prince Makavana</a>
                    <br>
                    <a target="_blank" href="https://www.instagram.com/i_am_prince_1602/">Instagram :- Prince Makavana </a>
                </div>


            </div>
        </div>
    </section>

    <section class="s1">
        <div class="main-container">
            <h3 style="text-align: center;">Some of my past projects</h3>
            <div class="post-wrapper">

                
                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/project_2.png" alt="">
                        <div class="post-preview">
                            <h6 class="post-title">
                                Blog Post Web-Site
                            </h6>
                            <p class="post-intro">This is my first demo site in Laravel. It is based on blogging . this is usefull for blogging and also share your experience. This one of best project which is fully done by me . </p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>

                <div>
                    <div class="post">
                        <img class="thumbnail" src="images/clone.png" alt="">
                        <div class="post-preview">
                            <h6 class="post-title">
                                MS CLone
                            </h6>
                            <p class="post-intro">This is clone of microshoft officle site. This is one of my best clone. The bast past of this clone is I completed this clone just in 1.5 hour</p>
                            <a target="_blank"  href="http://msofficemytheme.c1.biz/">Click to show Clone </a>
                        </div>
                    </div>
                </div>
                <div>

                    <div class="post">
                        <img class="thumbnail" src="images/codechef.ico" alt="">
                        <div class="post-preview">
                            <h6 class="post-title">
                                CP Lead
                            </h6>
                            <p class="post-intro">At This time , I am give my valuable time as a Codechef competitive Programming Leader at GEC-Rajkot. Me and My team running this chepter very Successfully .
                                <br>

                                <a target="_blank" href="https://www.linkedin.com/in/codechef-gec-rajkot-chapter-3953a31bb/">Codechef GEC-Rajkot Chapter</a>
                            </p>
                            <!-- <a href="#">Read More</a> -->
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="s2">
        <div class="main-container">
            <h3 style="text-align: center;">Get in Touch</h3>

            <form action="index.php" method="post" id="contect-form">
                <label for="name">Name</label>
                <input type="text" name="name" class="input-field" required>

                <label for="subject">Subject</label>
                <input type="text" name="subject" class="input-field" required>

                <label for="subject">Email</label>
                <input type="email" name="email" class="input-field" required>

                <label for="subject">Massage</label>
                <textarea name="massage" class="input-field" required></textarea>

                <input type="submit" id="submit-btn" value="Send">

                <?php
                if (isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['massage'])) {
                    $name = $_POST['name'];
                    $subject = $_POST['subject'];
                    $massage = $_POST['massage'];
                    $email = $_POST['email'];

                    if (!empty($name) && !empty($subject) && !empty($email) && !empty($massage)) {
                        $time = time();
                        $date = (date("Y-m-d", $time));
                        // echo $date;
                        $query = "INSERT INTO `information` VALUES ('','$name', '$subject','$email','$massage' , '$date')";


                        $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
                        if ($mysqli->connect_errno) {
                            echo $conn_error . $mysqli->connect_error;
                            exit();
                        }
                        if ($run_query = $mysqli->query($query)) {
                            echo 'Response Submitted Successfully';
                        } else {
                            echo $mysqli->error;
                        }
                    } else {
                        echo 'all filds are required';
                    }
                }
                ?>
            </form>


        </div>
    </section>

    <script src="js/main.js"></script>

</body>

</html>