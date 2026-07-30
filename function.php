<?php

function template_header($title){

    // Detect the current page so the matching nav item can be highlighted
    $current = basename($_SERVER['PHP_SELF']);

    // Pages that belong to each dropdown group
    $about_pages     = ['about.php', 'trustee.php', 'chairman-message.php', 'trustee-message.php', 'secretary-message.php', 'principal-message.php', 'administrative-message.php'];
    $academics_pages = ['curriculam.php', 'academics-excellence.php', 'extra-curricular.php', 'activity.php'];
    $admission_pages = ['admission.php', 'admission-form.php'];

    // Top-level active states
    $home_active       = ($current === 'index.php') ? ' active' : '';
    $about_active      = in_array($current, $about_pages) ? ' active' : '';
    $academics_active  = in_array($current, $academics_pages) ? ' active' : '';
    $facilities_active = ($current === 'facilities.php') ? ' active' : '';
    $admission_active  = in_array($current, $admission_pages) ? ' active' : '';
    $gallery_active    = ($current === 'gallery.php') ? ' active' : '';
    $career_active     = ($current === 'career-form.php') ? ' active' : '';
    $contact_active    = ($current === 'contact.php') ? ' active' : '';

    // Dropdown item-level active states
    $about_us_item        = ($current === 'about.php') ? ' active' : '';
    $trustee_item         = ($current === 'trustee.php') ? ' active' : '';
    $chairman_item        = ($current === 'chairman-message.php') ? ' active' : '';
    $trustee_msg_item     = ($current === 'trustee-message.php') ? ' active' : '';
    $secretary_item       = ($current === 'secretary-message.php') ? ' active' : '';
    $principal_item       = ($current === 'principal-message.php') ? ' active' : '';
    $admin_officer_item   = ($current === 'administrative-message.php') ? ' active' : '';

    $curriculam_item      = ($current === 'curriculam.php') ? ' active' : '';
    $academics_exc_item   = ($current === 'academics-excellence.php') ? ' active' : '';
    $extra_curricular_item = ($current === 'extra-curricular.php') ? ' active' : '';
    $activity_item        = ($current === 'activity.php') ? ' active' : '';

    $admission_proc_item  = ($current === 'admission.php') ? ' active' : '';
    $admission_form_item  = ($current === 'admission-form.php') ? ' active' : '';

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
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#mobileSidebar" aria-controls="mobileSidebar" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="d-none d-lg-flex" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link{$home_active}" aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle{$about_active}" href="#" id="navbarDropdownAbout" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            About
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownAbout">
                                            <li><a class="dropdown-item{$about_us_item}" href="about.php">About Us</a></li>
                                            <li><a class="dropdown-item{$trustee_item}" href="trustee.php">Board of Trustees</a></li>
                                            <li><a class="dropdown-item{$chairman_item}" href="chairman-message.php">Chairman's Message</a></li>
                                            <li><a class="dropdown-item{$trustee_msg_item}" href="trustee-message.php">Management Trustee's Message </a></li>
                                            <li><a class="dropdown-item{$secretary_item}" href="secretary-message.php">Secretary's Message</a></li>
                                            <li><a class="dropdown-item{$principal_item}" href="principal-message.php">Principal's Message </a></li>
                                            <li><a class="dropdown-item{$admin_officer_item}" href="administrative-message.php">Administrative Officer's Message  </a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle{$academics_active}" href="#" id="navbarDropdownAcademics" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Academics
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownAcademics">
                                            <li><a class="dropdown-item{$curriculam_item}" href="curriculam.php">Curriculam</a></li>
                                            <li><a class="dropdown-item{$academics_exc_item}" href="academics-excellence.php">Academic Excellence</a></li>
                                            <li><a class="dropdown-item{$extra_curricular_item}" href="extra-curricular.php">Extra - Curricular Activities</a></li>
                                            <li><a class="dropdown-item{$activity_item}" href="activity.php">Activity</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link{$facilities_active}" href="facilities.php">Facilities</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle{$admission_active}" href="#" id="navbarDropdownAdmission" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Admission
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownAdmission">
                                            <li><a class="dropdown-item{$admission_proc_item}" href="admission.php">Admission Procedure</a></li>
                                            <li><a class="dropdown-item{$admission_form_item}" href="admission-form.php">Admission Form</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link{$gallery_active}" href="gallery.php">Gallery</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link{$career_active}" href="career-form.php">Career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link{$contact_active}" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Mobile / tablet slide-in side menu -->
                            <div class="offcanvas offcanvas-end d-lg-none mobile-sidebar" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
                                <div class="offcanvas-header">
                                    <a class="navbar-brand" href="index.php">
                                        <img src="assets/images/logo.webp" alt="logo" class="img-fluid mobile-sidebar-logo">
                                    </a>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav mobile-nav-list">
                                        <li class="nav-item">
                                            <a class="nav-link{$home_active}" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link mobile-accordion-toggle{$about_active}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#mobileAbout" aria-expanded="false" aria-controls="mobileAbout">
                                                <span>About</span>
                                                <i class="bi bi-chevron-down"></i>
                                            </button>
                                            <ul class="collapse mobile-submenu" id="mobileAbout">
                                                <li><a class="dropdown-item{$about_us_item}" href="about.php">About Us</a></li>
                                                <li><a class="dropdown-item{$trustee_item}" href="trustee.php">Board of Trustees</a></li>
                                                <li><a class="dropdown-item{$chairman_item}" href="chairman-message.php">Chairman's Message</a></li>
                                                <li><a class="dropdown-item{$trustee_msg_item}" href="trustee-message.php">Management Trustee's Message </a></li>
                                                <li><a class="dropdown-item{$secretary_item}" href="secretary-message.php">Secretary's Message</a></li>
                                                <li><a class="dropdown-item{$principal_item}" href="principal-message.php">Principal's Message </a></li>
                                                <li><a class="dropdown-item{$admin_officer_item}" href="administrative-message.php">Administrative Officer's Message  </a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link mobile-accordion-toggle{$academics_active}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#mobileAcademics" aria-expanded="false" aria-controls="mobileAcademics">
                                                <span>Academics</span>
                                                <i class="bi bi-chevron-down"></i>
                                            </button>
                                            <ul class="collapse mobile-submenu" id="mobileAcademics">
                                                <li><a class="dropdown-item{$curriculam_item}" href="curriculam.php">Curriculam</a></li>
                                                <li><a class="dropdown-item{$academics_exc_item}" href="academics-excellence.php">Academic Excellence</a></li>
                                                <li><a class="dropdown-item{$extra_curricular_item}" href="extra-curricular.php">Extra - Curricular Activities</a></li>
                                                <li><a class="dropdown-item{$activity_item}" href="activity.php">Activity</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link{$facilities_active}" href="facilities.php">Facilities</a>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link mobile-accordion-toggle{$admission_active}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#mobileAdmission" aria-expanded="false" aria-controls="mobileAdmission">
                                                <span>Admission</span>
                                                <i class="bi bi-chevron-down"></i>
                                            </button>
                                            <ul class="collapse mobile-submenu" id="mobileAdmission">
                                                <li><a class="dropdown-item{$admission_proc_item}" href="admission.php">Admission Procedure</a></li>
                                                <li><a class="dropdown-item{$admission_form_item}" href="admission-form.php">Admission Form</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link{$gallery_active}" href="gallery.php">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link{$career_active}" href="career-form.php">Career</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link{$contact_active}" href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </div>
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
            <div class="col-lg-4 col-md-4 mb-4">
            <img src="assets/images/logo.webp" alt="Logo" style="max-width:100%;border-radius: 10px;margin-bottom: 20px;">
                <p class="mt-3">
                    Bhaarath Vidhya Bhavan Matriculation Higher Secondary School has been providing
                    quality education with academic excellence and holistic development since 1999.
                </p>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-4 col-md-4 mb-4">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="academics-overview.php">Academics</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-4 col-md-4">
                <h4>Contact Us</h4>

                <p class="add">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>
                                   Udumalai Road,<br>Near Shanmuganathi,<br>
                    Palani, Tamil Nadu.</span>
                </p>

                <p class="add">
                    <i class="bi bi-telephone-fill"></i>
                    <span><a href="tel:+917373051404" class="text-white" style="text-decoration:none;">+91 73730 51404</a>
                    </span>
                </p>

                <p class="add">
                    <i class="bi bi-envelope-fill"></i>
                    <span><a href="mailto:bhaarathvidhyabhavan@gmail.com" class="text-white" style="text-decoration:none;">bhaarathvidhyabhavan@gmail.com</a>
                                     </span>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var header = document.querySelector('.main-header');
            if (!header) return;

            var stickyPoint = header.offsetTop;
            var headerHeight = header.offsetHeight;
            var lastScrollY = window.scrollY;
            var ticking = false;

            function updateHeaderState() {
                var currentScrollY = window.scrollY;

                // Toggle the sticky (fixed) state once we've scrolled past the header
                if (currentScrollY > stickyPoint) {
                    if (!header.classList.contains('header-sticky')) {
                        header.classList.add('header-sticky');
                        document.body.style.paddingTop = headerHeight + 'px';
                    }
                } else {
                    if (header.classList.contains('header-sticky')) {
                        header.classList.remove('header-sticky');
                        document.body.style.paddingTop = '';
                    }
                }

                // Hide the header when scrolling down, reveal it when scrolling up.
                // Only kicks in once we've scrolled past the header itself, so it
                // doesn't flicker while still at the top of the page.
                if (currentScrollY > headerHeight) {
                    if (currentScrollY > lastScrollY) {
                        header.classList.remove('header-hidden');
                    } else {
                        header.classList.remove('header-hidden');
                    }
                } else {
                    header.classList.remove('header-hidden');
                }

                lastScrollY = currentScrollY;
                ticking = false;
            }

            window.addEventListener('scroll', function () {
                if (!ticking) {
                    window.requestAnimationFrame(updateHeaderState);
                    ticking = true;
                }
            }, { passive: true });

            updateHeaderState();
        });
    </script>
    </body>
    </html>
    EOT;
}