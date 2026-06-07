<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <?php if (isset($page_meta)) echo $page_meta; ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- ===== PAGE PRELOADER ===== -->
    <div id="pagePreloader">
        <div class="preloader-inner">
            <img src="img/logo.svg" alt="Core Web Pro" class="preloader-logo">
            <div class="preloader-ring"></div>
        </div>
    </div>
    <!--/ PAGE PRELOADER -->

    <!-- ===== HEADER ===== -->
    <header id="siteHeader">
        <nav id="mainNav" class="navbar navbar-expand-lg nav-transparent">
            <div class="container-90 d-flex align-items-center w-100">

                <!-- Logo (injected by scripts.js → NAV_LOGO_SVG) -->
                <a class="navbar-brand flex-shrink-0" id="navLogoBrand" href="index.php"></a>

                <!-- Desktop Navigation -->
                <div class="collapse navbar-collapse ms-4" id="mainNavCollapse">
                    <ul class="navbar-nav mx-auto gap-1 align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">About Us</a></li>
                                <li><a class="dropdown-item" href="#">Our Team</a></li>
                                <li><a class="dropdown-item" href="#">Portfolio</a></li>                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Web Designing</a></li>
                                <li><a class="dropdown-item" href="#">Web Development</a></li>
                                <li><a class="dropdown-item" href="#">SEO &amp; Digital Marketing</a></li>
                                <li><a class="dropdown-item" href="#">Mobile Development</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Right Actions -->
                <div class="nav-actions ms-auto d-flex align-items-center gap-2 flex-shrink-0">
                    <a href="#contact" class="btn btn-get-in-touch d-none d-lg-inline-flex">Send Enquiry</a>
                    <button class="nav-hamburger d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas" aria-label="Menu">
                        <span></span><span></span><span></span>
                    </button>
                </div>

            </div>
        </nav>

        <!-- Mobile Offcanvas Menu -->
        <div class="offcanvas offcanvas-end mobile-nav-offcanvas" tabindex="-1" id="mobileMenuOffcanvas">
            <div class="offcanvas-header">
                <a href="index.php">
                    <img src="img/logo.svg" alt="Core Web Pro" height="36">
                </a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item mobile-nav-group">
                        <span class="mobile-nav-label">Company</span>
                        <ul class="mobile-nav-sub">
                            <li><a class="nav-link" href="#">About Us</a></li>
                            <li><a class="nav-link" href="#">Our Team</a></li>
                            <li><a class="nav-link" href="#">Portfolio</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mobile-nav-group">
                        <span class="mobile-nav-label">Services</span>
                        <ul class="mobile-nav-sub">
                            <li><a class="nav-link" href="#">Web Designing</a></li>
                            <li><a class="nav-link" href="#">Web Development</a></li>
                            <li><a class="nav-link" href="#">SEO &amp; Digital Marketing</a></li>
                            <li><a class="nav-link" href="#">Mobile Development</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <a href="#contact" class="btn btn-secondary w-100 mt-4 rounded-pill">Send Enquiry</a>
            </div>
        </div>
    </header>
    <!--/ HEADER -->
