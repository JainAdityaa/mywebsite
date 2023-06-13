<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo $dir; ?>/public/css/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comforter&family=Open+Sans:wght@300&family=Quintessential&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

</head>

<body>
    <!-- Navigation Section -->
    <section class="navbar-container">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" id="logo" href="index.php"> <img class="logo-image" src="./images/logo.jpeg" alt="logo"><img class="logo-text" src="./images/aj-logo.gif" alt="logo_gif"> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria- expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="index.php"><img src="./images/home.png"></img> Home</a>
                            <a class="nav-link" href="about.html"><img src="./images/info.png"></img> About</a>
                            <!-- <a class="nav-link" href="#">Service</a> -->
                            <!-- <a class="nav-link" href="#skills">Skills</a> -->
                            <!-- <a class="nav-link" href="#carrier">Carrier</a> -->
                            <a class="nav-link" href="project.html"><img src="./images/project.png"></img> Projects</a>
                            <a class="nav-link" href="#"><img src="./images/contact.png"></img> Contact</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- Avtar Section -->
    <div id="home">
        <section class="Avtar-container">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content-1">
                            <div class="namste">
                                <img src="./images/namaste-icon.png" class="img-fluid" alt="">
                                <p>Namaste !</p>
                            </div>
                            <div class="main-heading">
                                <p>I'm <br> <span class="adii"> Aditya Jain</span></p>
                            </div>
                            <div class="designation">
                                <p>Software Development Engineer (SDE)</p>
                            </div>
                            <div class="social-icon">
                                <a href="https://www.linkedin.com/in/aditya-jain-a5a675203/" target="_blank"><img src="./images/linkedin.png" class="img-fluid" alt=""></a>
                                <a href="https://instagram.com/mr_aj_web_developer?igshid=ZDdkNTZiNTM=" target="_blank"><img src="./images/instagram.png" class="img-fluid" alt=""></a>
                                <a href="https://bit.ly/3xP0a3A" target="_blank"><img src="./images/whatsapp.png" target="_blank" alt=""></a>
                                <a href="https://github.com/JainAdityaa" target="_blank"><img src="./images/github (1).png" class="img-fluid" alt=""></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="avtar-image">
                            <img src="./images/AvatarAndIcons.png" class="img-fluid" alt="avtar-icon">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content-2">
                            <a href="./Aditya resume .pdf" target="_blank" download>
                                <div class="downloadcv">
                                    <p> Download CV</p><img src="./images/ArrowLineDown.png" class="img-fluid" alt="">
                                </div>
                            </a>
                            <a href="mailto:aditya.jain@almond.solutions?subject=subject text" target="_blank">
                                <div class="direct-mail">
                                    <img src="./images/search 1.png" class="img-fluid" alt="">
                                    <p>Direct mail</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Break Line Section -->
    <div class="container">
        <hr>
    </div>

    <!-- About Section -->
    <div id="about">
        <section class="about-container">

            <div class="container">
                <div class="row">
                    <div class="col-md-4" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="image">
                            <img src="./images/about-image.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-7" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="content-3">
                            <div class="about-heading">
                                <p>ABOUT ME !</p>
                            </div>
                            <ul>
                                <li>Welcome to my website! My name is <b style="color:#408301">Aditya Jain</b> , and I
                                    am a <b style="color:#408301">Software Developmenr Engineer</b> (SDE) currently
                                    working at Atechnos Pvt Ltd. I am passionate about creating visually appealing and
                                    user-friendly websites that provide a seamless experience for the user. </li>
                                <li>With one and a half years of experience in web development, I have honed my skills
                                    in <b style="color:#408301">HTML 5</b>, <b style="color:#408301">CSS 3</b>, <b style="color:#408301">Bootstrap 5</b>, <b style="color:#408301">JavaScript</b>,
                                    and other front-end technologies. I am constantly exploring new trends and
                                    technologies in the web development industry to stay updated and provide the best
                                    possible solutions for my clients.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <!-- Skills Section -->
    <div id="skills">
        <div class="skills-container">
            <!-- <div class="container"> -->
            <div class="home-demo">
                <div class="advantage-heading">
                    <span>S</span>
                    <span>K</span>
                    <span>I</span>
                    <span>L</span>
                    <span>L</span>
                    <span>S</span>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="box-1">
                            <img src="./images/html-5 (1) 2.png" class="img-fluid" alt="">
                            <p>90%</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-1">
                            <img src="./images/css-3 2.png" class="img-fluid" alt="">
                            <p>85%</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-1">
                            <img src="./images/bootstrap 2.png" class="img-fluid" alt="">
                            <p>80%</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-1">
                            <img src="./images/Rectangle 15.png" class="img-fluid" alt="">
                            <p>70%</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-1">
                            <img src="./images/Rectangle 14.png" class="img-fluid" alt="">
                            <p>75%</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-1">
                            <img src="./images/wordpress.png" class="img-fluid" alt="">
                            <p>95%</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-1">
                            <img src="./images/php.png" class="img-fluid" alt="">
                            <p>70%</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-1">
                            <img src="./images/mysql.png" class="img-fluid" alt="">
                            <p>80%</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-1">
                            <img src="./images/1_doAg1_fMQKWFoub-6gwUiQ.webp" class="img-fluid" alt="">
                            <p>80%</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>

    <!-- Project Scetion -->
    <div id="project">
        <section class="project-container">
            <div class="container">
                <div class="advantage-heading">
                    <span>P</span>
                    <span>R</span>
                    <span>O</span>
                    <span>J</span>
                    <span>E</span>
                    <span>T</span>
                    <span>S</span>
                </div>
                <div class="row pt-3">
                    <div class="col-md-3" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="project-box">
                            <h6 class="text-center">Calculator</h6>
                            <div class="skill">
                                <p class="HTML">HTML
                                <p class="CSS">CSS</p>
                                <p class="javascript">Javascript</p>
                            </div>
                            <p class="about-project">This project is Created on HTML, CSS & Javascript. In this project
                                i can use to create design in html & Css. </p>
                            <div class="buttons">
                                <button>Project Detail <i class='fa fa-sign-out'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="project-box">
                            <h6 class="text-center">CRUD Operation</h6>
                            <div class="skill">
                                <p class="HTML">Reactjs</p>
                                <p class="CSS">Nodejs</p>
                                <p class="javascript">MongoDB</p>
                            </div>
                            <p class="about-project">This project is created on React js , Node js and Mongo DB. In this
                                project I can use all functionality in CRUD . </p>
                            <div class="buttons">
                                <button>Project Detail <i class='fa fa-sign-out'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="project-box">
                            <h6 class="text-center">BLOG Page</h6>
                            <div class="skill">
                                <p class="HTML">HTML
                                <p class="CSS">CSS</p>
                                <p class="javascript">Bootstrap</p>
                            </div>
                            <p class="about-project">This project work on HTML, CSS & Bootstrap. In tis project I can
                                mostly work on HTML.This is a simple Blog page.</p>
                            <div class="buttons">
                                <button>Project Detail <i class='fa fa-sign-out'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="project-box">
                            <h6 class="text-center">Car Racing</h6>
                            <div class="skill">
                                <p class="HTML">HTML
                                <p class="CSS">CSS</p>
                                <p class="javascript">Javascript</p>
                            </div>
                            <p class="about-project">This project is Created on HTML, CSS & Javascript. In this project
                                i can use to create design in html & Css. </p>
                            <div class="buttons">
                                <button>Project Detail <i class='fa fa-sign-out'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="view-btn">
                        <a href="project.html" target="_blank"><button class="button"><span>View All
                                </span></button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Carrier Section -->
    <div id="carrier">
        <section class="carrier-container">
            <div class="container">
            <div class="advantage-heading">
                    <span>C</span>
                    <span>A</span>
                    <span>R</span>
                    <span>R</span>
                    <span>I</span>
                    <span>E</span>
                    <span>R</span>
                </div>
                <div class="content-5">
                    <div class="carrier-text">
                        <p>I'm currently looking to join a <span style="color: #408301;"> cross-functional</span> team
                            <br>
                            that values improving people's lives through accessible design
                        </p>
                    </div>
                    <div class="carrier-image" data-aos="zoom-in" data-aos-duration="2000">
                        <img src="./images/carrier-image.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer Section -->
    <div id="footer">
        <section class="footer-container">
            <div class="contaier">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="index.php">
                            <div class="logo_with_text">
                                <img src="./images/logo.jpeg" alt="logo">
                                <p>mr_aj_web_developer</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="quick_link">
                            <p class="Quick">Quick Links</p>

                            <p><img src="./images/home.png"></img><a href="index.html"> Home</a></p>


                            <p><img src="./images/info.png"></img><a href="About.html"> About</a></p>


                            <p><img src="./images/project.png"></img><a href="project.html"> Projects</a></p>


                            <p><img src="./images/contact.png"></img><a href="Contact.html"> Contact Us </a></p>

                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="contact">
                            <p class="con">Contact</p>
                            <div class="msg">
                                <form method="post" action="process.php">
                                    <input type="text" class="input_box" name="msg" placeholder="Enter the message..." required>
                                    <button type="submit" class="msg_btn" name="send">SEND</button>
                                </form>
                            </div>
                            <p class="email"><img src="./images/gmail.png"></img> &nbsp;jainaditya879@gmail.com</p>
                            <p class="phone"><img src="./images/smartphone-call.png"></img> &nbsp;9302642784</p>
                            <p class="whatsapp"><img src="./images/whatsapp (1).png"></img> &nbsp;8435988494</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="social_icon">
                            <p>Social Links</p>
                            <div class="link">
                                <a href="https://www.linkedin.com/in/aditya-jain-a5a675203/" target="_blank"><img src="./images/linkedin.png" alt=""></a>
                                <a href="https://instagram.com/mr_aj_web_developer?igshid=ZDdkNTZiNTM=" target="_blank"><img src="./images/instagram.png" alt=""></a>
                                <a href="https://bit.ly/3xP0a3A" target="_blank"><img src="./images/whatsapp (1).png" target="_blank" alt=""></a>
                                <a href="https://github.com/JainAdityaa" target="_blank"><img src="./images/github (1).png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <hr>
                </div>
                <div class="row justify-content-center align-items-center g-2">
                    <div class="copy">
                        <p class="thanks">Thank you for visiting my website, and please feel free to contact me for any inquiries or collaboration opportunities.</p>
                        <p>Copyright <i class="fa fa-copyright"></i> 2023 <b style="color:#408301">mr_aj_web_developer</b>. All Rights Reserved. <i class="fa fa-heart"></i>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(function() {
            // Owl Carousel
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                stagePadding: 120,
                autoplay: true,
                autoplayTimeout: 2000,
                loop: true,
                margin: 65,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 3,
                        nav: true,
                        // margin: 10,
                        // stagePadding: 25
                    },
                    600: {
                        items: 4,
                        nav: false
                    },
                    1000: {
                        items: 6,
                        nav: true,
                        // loop: false
                    }
                }
            });
        });

        let popup = document.getElementById("popup");

        function openPopup() {
            popup.classList.add("open-popup");
        }

        function closePopup() {
            popup.classList.remove("open-popup");
        }

        AOS.init();
    </script>

</body>

</html>