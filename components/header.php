<?php
$_cur = basename($_SERVER['PHP_SELF']);

function _nav_active(array $pages, string $cur, string $cls = 'active'): string {
    return in_array($cur, $pages, true) ? ' ' . $cls : '';
}

$_company_pages  = ['about.php', 'team.php', 'portfolio.php'];
$_services_pages = ['web-designing.php', 'web-development.php', 'seo-digital-marketing.php', 'mobile-development.php'];
?>
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

                <!-- Logo -->
                <a class="navbar-brand flex-shrink-0" id="navLogoBrand" href="index.php"></a>

                <!-- Desktop Navigation -->
                <div class="collapse navbar-collapse ms-4" id="mainNavCollapse">
                    <ul class="navbar-nav mx-auto gap-1 align-items-center">

                        <li class="nav-item">
                            <a class="nav-link<?= _nav_active(['index.php'], $_cur) ?>" href="index.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle<?= _nav_active($_company_pages, $_cur) ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item<?= _nav_active(['about.php'], $_cur) ?>" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item<?= _nav_active(['team.php'], $_cur) ?>" href="team.php">Our Team</a></li>
                                <li><a class="dropdown-item<?= _nav_active(['portfolio.php'], $_cur) ?>" href="portfolio.php">Portfolio</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle<?= _nav_active($_services_pages, $_cur) ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item<?= _nav_active(['web-designing.php'], $_cur) ?>" href="web-designing.php">Web Designing</a></li>
                                <li><a class="dropdown-item<?= _nav_active(['web-development.php'], $_cur) ?>" href="web-development.php">Web Development</a></li>
                                <li><a class="dropdown-item<?= _nav_active(['seo-digital-marketing.php'], $_cur) ?>" href="seo-digital-marketing.php">SEO &amp; Digital Marketing</a></li>
                                <li><a class="dropdown-item<?= _nav_active(['mobile-development.php'], $_cur) ?>" href="mobile-development.php">Mobile Development</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link<?= _nav_active(['pricing.php'], $_cur) ?>" href="pricing.php">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link<?= _nav_active(['blogs.php', 'blog.php', 'blog-detail.php'], $_cur) ?>" href="blogs.php">Blogs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link<?= _nav_active(['contact.php'], $_cur) ?>" href="contact.php">Contact</a>
                        </li>

                    </ul>
                </div>

                <!-- Right Actions -->
                <div class="nav-actions ms-auto d-flex align-items-center gap-2 flex-shrink-0">
                    <a href="contact.php" class="btn btn-get-in-touch d-none d-lg-inline-flex">Send Enquiry</a>
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

                    <li class="nav-item">
                        <a class="nav-link<?= _nav_active(['index.php'], $_cur) ?>" href="index.php">Home</a>
                    </li>

                    <li class="nav-item mobile-nav-group">
                        <span class="mobile-nav-label<?= _nav_active($_company_pages, $_cur, 'active-group') ?>">Company</span>
                        <ul class="mobile-nav-sub">
                            <li><a class="nav-link<?= _nav_active(['about.php'], $_cur) ?>" href="about.php">About Us</a></li>
                            <li><a class="nav-link<?= _nav_active(['team.php'], $_cur) ?>" href="team.php">Our Team</a></li>
                            <li><a class="nav-link<?= _nav_active(['portfolio.php'], $_cur) ?>" href="portfolio.php">Portfolio</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mobile-nav-group">
                        <span class="mobile-nav-label<?= _nav_active($_services_pages, $_cur, 'active-group') ?>">Services</span>
                        <ul class="mobile-nav-sub">
                            <li><a class="nav-link<?= _nav_active(['web-designing.php'], $_cur) ?>" href="web-designing.php">Web Designing</a></li>
                            <li><a class="nav-link<?= _nav_active(['web-development.php'], $_cur) ?>" href="web-development.php">Web Development</a></li>
                            <li><a class="nav-link<?= _nav_active(['seo-digital-marketing.php'], $_cur) ?>" href="seo-digital-marketing.php">SEO &amp; Digital Marketing</a></li>
                            <li><a class="nav-link<?= _nav_active(['mobile-development.php'], $_cur) ?>" href="mobile-development.php">Mobile Development</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link<?= _nav_active(['pricing.php'], $_cur) ?>" href="pricing.php">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link<?= _nav_active(['blogs.php', 'blog.php', 'blog-detail.php'], $_cur) ?>" href="blogs.php">Blogs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link<?= _nav_active(['contact.php'], $_cur) ?>" href="contact.php">Contact</a>
                    </li>

                </ul>
                <a href="contact.php" class="btn btn-secondary w-100 mt-4 rounded-pill">Send Enquiry</a>
            </div>
        </div>
    </header>
    <!--/ HEADER -->
