<?php
/* ── Google Analytics 4 Measurement ID ─────────────────────────────
 * Replace with your actual GA4 property ID from
 * Google Analytics → Admin → Data Streams → Measurement ID (G-XXXXXXXX).
 * Set to empty string '' to disable tracking (e.g. on staging).
 */
define('CWP_GA_ID', 'G-XXXXXXXXXX');

$_cur = basename($_SERVER['PHP_SELF']);

function _nav_active(array $pages, string $cur, string $cls = 'active'): string {
    return in_array($cur, $pages, true) ? ' ' . $cls : '';
}

$_company_pages  = ['about.php', 'team.php', 'portfolio.php'];
$_services_pages = ['web-designing.php', 'web-development.php', 'seo-digital-marketing.php', 'mobile-development.php'];

/* ── HTML output minifier ───────────────────────────────────────────
 * Runs once at script end via ob_start callback.
 * Protects <script>, <style>, <pre>, <textarea> content from stripping.
 * Removes HTML comments; collapses whitespace runs to a single space.
 */
function cwp_minify_html(string $buf): string {
    $slots = [];
    // Protect tags whose content must not be whitespace-stripped
    $buf = preg_replace_callback(
        '/<(script|style|pre|textarea)(\s[^>]*)?>.*?<\/\1>/si',
        function (array $m) use (&$slots): string {
            $id = "\x02" . count($slots) . "\x03";
            $slots[$id] = $m[0];
            return $id;
        },
        $buf
    );
    // Remove HTML comments (preserve IE conditional comments)
    $buf = preg_replace('/<!--(?!\[if\s)[\s\S]*?-->/u', '', $buf);
    // Collapse any run of whitespace (spaces, tabs, newlines) to one space
    $buf = preg_replace('/\s{2,}/', ' ', $buf);
    // Restore protected blocks verbatim
    foreach ($slots as $id => $val) {
        $buf = str_replace($id, $val, $buf);
    }
    return trim($buf);
}
ob_start('cwp_minify_html');
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

    <?php if (defined('CWP_GA_ID') && CWP_GA_ID !== ''): ?>
    <!-- Google Analytics 4 — performance-safe async load -->
    <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= htmlspecialchars(CWP_GA_ID) ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?= htmlspecialchars(CWP_GA_ID) ?>', {
            page_path: window.location.pathname,
            anonymize_ip: true,
            cookie_flags: 'SameSite=None;Secure'
        });
    </script>
    <?php endif; ?>
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
                            <a class="nav-link<?= _nav_active(['contact.php'], $_cur) ?>" href="contact.php">Contact</a>
                        </li>

                    </ul>
                </div>

                <!-- Right Actions -->
                <div class="nav-actions ms-auto d-flex align-items-center gap-2 flex-shrink-0">
                    <a href="enquiry.php" class="btn btn-get-in-touch d-none d-lg-inline-flex">Get a Quote</a>
                    <button class="nav-hamburger d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas" aria-label="Menu">
                        <span></span><span></span><span></span>
                    </button>
                </div>

            </div>
        </nav>

        <!-- ===== MOBILE OFFCANVAS ===== -->
        <?php
        $_co_open  = in_array($_cur, $_company_pages)  ? ' is-open' : '';
        $_sv_open  = in_array($_cur, $_services_pages) ? ' is-open' : '';
        $_co_exp   = in_array($_cur, $_company_pages)  ? 'true' : 'false';
        $_sv_exp   = in_array($_cur, $_services_pages) ? 'true' : 'false';
        ?>
        <div class="offcanvas offcanvas-end mobile-nav-offcanvas" tabindex="-1" id="mobileMenuOffcanvas" aria-labelledby="mobileMenuLabel">

            <!-- Header -->
            <div class="mob-nav-header">
                <a href="index.php" class="mob-nav-brand">
                    <img src="img/logo.svg" alt="Core Web Pro" class="mob-nav-logo-img">
                </a>
                <button type="button" class="mob-nav-close" data-bs-dismiss="offcanvas" aria-label="Close menu">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>

            <!-- Body -->
            <div class="mob-nav-body">
                <nav class="mob-nav" aria-label="Mobile navigation">
                    <ul class="mob-nav__list">

                        <li class="mob-nav__item">
                            <a href="index.php" class="mob-nav__link<?= _nav_active(['index.php'], $_cur) ?>">Home</a>
                        </li>

                        <!-- Company accordion -->
                        <li class="mob-nav__item mob-nav__item--group<?= $_co_open ?>">
                            <button class="mob-nav__toggle" aria-expanded="<?= $_co_exp ?>">
                                <span>Company</span>
                                <svg class="mob-nav__chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </button>
                            <ul class="mob-nav__sub">
                                <li><a href="about.php"     class="mob-nav__sub-link<?= _nav_active(['about.php'],     $_cur) ?>">About Us</a></li>
                                <li><a href="team.php"      class="mob-nav__sub-link<?= _nav_active(['team.php'],      $_cur) ?>">Our Team</a></li>
                                <li><a href="portfolio.php" class="mob-nav__sub-link<?= _nav_active(['portfolio.php'], $_cur) ?>">Portfolio</a></li>
                            </ul>
                        </li>

                        <!-- Services accordion -->
                        <li class="mob-nav__item mob-nav__item--group<?= $_sv_open ?>">
                            <button class="mob-nav__toggle" aria-expanded="<?= $_sv_exp ?>">
                                <span>Services</span>
                                <svg class="mob-nav__chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </button>
                            <ul class="mob-nav__sub">
                                <li><a href="web-designing.php"       class="mob-nav__sub-link<?= _nav_active(['web-designing.php'],       $_cur) ?>">Web Designing</a></li>
                                <li><a href="web-development.php"     class="mob-nav__sub-link<?= _nav_active(['web-development.php'],     $_cur) ?>">Web Development</a></li>
                                <li><a href="seo-digital-marketing.php" class="mob-nav__sub-link<?= _nav_active(['seo-digital-marketing.php'], $_cur) ?>">SEO &amp; Digital Marketing</a></li>
                                <li><a href="mobile-development.php"  class="mob-nav__sub-link<?= _nav_active(['mobile-development.php'],  $_cur) ?>">Mobile Development</a></li>
                            </ul>
                        </li>

                        <li class="mob-nav__item">
                            <a href="pricing.php" class="mob-nav__link<?= _nav_active(['pricing.php'], $_cur) ?>">Pricing</a>
                        </li>

                        <li class="mob-nav__item">
                            <a href="contact.php" class="mob-nav__link<?= _nav_active(['contact.php'], $_cur) ?>">Contact</a>
                        </li>

                    </ul>
                </nav>

                <!-- Footer: CTA + contact -->
                <div class="mob-nav-foot">
                    <a href="enquiry.php" class="mob-nav-cta">
                        Get a Quote
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                    <div class="mob-nav-contact">
                        <a href="tel:+917799971112">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.16 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92Z"/></svg>
                            +91 77999 71112
                        </a>
                        <a href="mailto:info@corewebpro.in">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            info@corewebpro.in
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!--/ MOBILE OFFCANVAS -->

    </header>
    <!--/ HEADER -->
