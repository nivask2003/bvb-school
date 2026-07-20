<?php

function template_header($title){
    echo <<< EOT
    <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>$title</title>
            <link rel="stylesheet" href="assets/css/style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
            <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.webp">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
            <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
            <link rel="manifest" href="Assets/Images/site.webmanifest">
            <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
            <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
        </head>

        <body>
            <header>
                <section class="admission-announcement">
                    <div class="announcement-track">
                        <div class="announcement-content">
                            <span class="icon">
                                <i class="bi bi-megaphone-fill"></i>
                            </span>

                            <span>
                                🎓 Admissions Open for the Academic Year 2026–2027 | Pre-KG to Grade XII
                            </span>



                            <!-- Duplicate for seamless loop -->
                            <span class="icon">
                                <i class="bi bi-megaphone-fill"></i>
                            </span>

                            <span>
                                🎓 Admissions Open for the Academic Year 2026–2027 | Pre-KG to Grade XII
                            </span>


                        </div>
                    </div>
                </section>
                <div class="main-header">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo.webp" alt="logo" class="img-fluid">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            About
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                            <li><a class="dropdown-item" href="chairman-message.php">Chairman's Message</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="academics.php" tabindex="-1"
                                            aria-disabled="true">Academics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="facilities.php" tabindex="-1"
                                            aria-disabled="true">Facilities</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Admission
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Admission Procedure</a></li>
                                            <li><a class="dropdown-item" href="#">Admission Form</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="facilities.php" tabindex="-1" aria-disabled="true">Gallery</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Career
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Career Guidance</a></li>
                                            <li><a class="dropdown-item" href="#">Career Form</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="facilities.php" tabindex="-1" aria-disabled="true">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
    EOT;
}

function template_footer(){
    echo <<< EOT
    <footer class="footer py-5">
    <div class="container">
        <div class="row">

            <!-- Column 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
            <img src="assets/images/logo.webp" alt="Logo" style="max-width:400px;border-radius: 10px;margin-bottom: 20px;">
                <p class="mt-3">
                    Bhaarath Vidhya Bhavan Matriculation Higher Secondary School has been providing
                    quality education with academic excellence and holistic development since 1999.
                </p>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="academics.php">Academics</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-4 col-md-12">
                <h4>Contact Us</h4>

                <p class="add">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>
                                   Udumalai Road,<br>Near Shanmuganathi,<br>
                    Palani, Tamil Nadu.</span>
                </p>

                <p class="add">
                    <i class="bi bi-telephone-fill"></i>
                    <span>
                    +91 73730 51404</span>
                </p>

                <p class="add">
                    <i class="bi bi-envelope-fill"></i>
                    <span>
                                     admissions@bhaarathvidhyabhavan.com</span>
                </p>

                            </div>

        </div>

        <hr>

        <div class="text-center copy">
            &copy; 2026 Bhaarath Vidhya Bhavan Matriculation Higher Secondary School. All Rights Reserved.
        </div>
    </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
    </body>
    </html>
    EOT;
}
