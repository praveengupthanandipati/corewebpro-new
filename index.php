<?php
$page_meta = '
    <title>Core Web Pro | Web Design &amp; Development Company in Hyderabad</title>

    <!-- Primary SEO -->
    <meta name="description" content="Core Web Pro is a leading web design and development company in Hyderabad, Telangana. We deliver stunning websites, mobile apps, SEO, and digital marketing solutions that grow your business.">
    <meta name="keywords" content="web design company Hyderabad, web development Hyderabad, website design Hyderabad, web design services Hyderabad, professional web design Hyderabad, responsive web design Hyderabad, UI UX design Hyderabad, website development company Hyderabad, custom website design Hyderabad, ecommerce website development Hyderabad, mobile app development Hyderabad, React development Hyderabad, WordPress development Hyderabad, SEO services Hyderabad, digital marketing Hyderabad, software company Hyderabad, IT company Hyderabad, Telangana web design, affordable web design Hyderabad, Core Web Pro">
    <meta name="author" content="Core Web Pro">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/">

    <!-- Open Graph (Facebook / LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Core Web Pro">
    <meta property="og:title" content="Core Web Pro | Web Design &amp; Development Company in Hyderabad">
    <meta property="og:description" content="Core Web Pro is a leading web design and development company in Hyderabad. We build modern, fast, and conversion-focused websites and apps for businesses across India.">
    <meta property="og:url" content="https://www.corewebpro.com/">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Core Web Pro | Web Design &amp; Development Company in Hyderabad">
    <meta name="twitter:description" content="Professional web design, development, SEO &amp; digital marketing services in Hyderabad, Telangana. Grow your business with Core Web Pro.">
    <meta name="twitter:image" content="https://www.corewebpro.com/img/og-image.jpg">

    <!-- Geo & Business -->
    <meta name="geo.region" content="IN-TG">
    <meta name="geo.placename" content="Hyderabad, Telangana, India">
    <meta name="geo.position" content="17.3850;78.4867">
    <meta name="ICBM" content="17.3850, 78.4867">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "Core Web Pro",
        "description": "Web design, web development, mobile app development, SEO and digital marketing company based in Hyderabad, Telangana.",
        "url": "https://www.corewebpro.com",
        "logo": "https://www.corewebpro.com/img/logo.svg",
        "email": "info@corewebpro.com",
        "telephone": "+917799971112",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Hyderabad",
            "addressRegion": "Telangana",
            "addressCountry": "IN"
        },
        "areaServed": ["Hyderabad", "Telangana", "India"],
        "serviceType": ["Web Design", "Web Development", "Mobile App Development", "SEO", "Digital Marketing", "UI UX Design"],
        "sameAs": [
            "https://www.facebook.com/corewebpro",
            "https://www.instagram.com/corewebpro",
            "https://www.linkedin.com/company/corewebpro"
        ]
    }
    </script>
';
include 'components/header.php';
require_once 'components/hero-data.php';
?>

    <!-- ===== MAIN ===== -->
    <main>

        <!-- HERO SWIPER SECTION -->
        <?php require_once 'components/hero-data.php'; ?>
        <section class="hero-section">
            <div class="swiper homeslider hero-swiper">
                <div class="swiper-wrapper">

                    <?php foreach ($hero_slides as $slide): ?>
                    <div class="swiper-slide hero-slide hero-slide--<?= $slide['slide_num'] ?>">
                        <div class="hero-overlay"></div>
                        <div class="container-90 h-100 d-flex align-items-center">
                            <div class="slide-content">
                                <div class="slide-body">
                                    <div class="slide-body__left">
                                        <h1 class="slide-heading"><?= $slide['heading'] ?></h1>
                                    </div>
                                    <div class="slide-body__right">
                                        <p class="slide-desc"><?= htmlspecialchars($slide['desc']) ?></p>
                                    </div>
                                </div>
                                <div class="slide-cta">
                                    <?php foreach ($slide['cta'] as $btn): ?>
                                    <a href="<?= htmlspecialchars($btn['href']) ?>" class="btn btn-slide-<?= $btn['style'] ?>">&rsaquo; <?= htmlspecialchars($btn['text']) ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Swiper Pagination -->
                <div class="swiper-pagination hero-pagination"></div>

                <!-- Circular Scroll Badge -->
                <div class="hero-scroll-badge">
                    <div class="hero-scroll-badge__ring">
                        <span data-icon="heroScrollRing"></span>
                    </div>
                    <div class="hero-scroll-badge__arrow">
                        <span data-icon="heroScrollArrow"></span>
                    </div>
                </div>

            </div>
        </section>
        <!--/ HERO SWIPER SECTION -->

        <!-- ===== SERVICES SECTION ===== -->
        <?php require_once 'components/service-data.php'; ?>
        <section class="services-section" id="services">
            <div class="container-90">

                <div class="services-header">
                    <span class="services-eyebrow" data-aos="fade-down" data-aos-duration="600">What We Do</span>
                    <h2 class="services-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">Our Core <span>Services</span></h2>
                </div>

                <div class="services-row">
                    <?php foreach ($services as $i => $svc):
                        $d = $i * 150;
                    ?>
                    <div class="service-card" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="800">
                        <div class="service-card__icon" data-aos="zoom-in" data-aos-delay="<?= $d + 100 ?>" data-aos-duration="500">
                            <span data-icon="<?= $svc['icon'] ?>"></span>
                        </div>
                        <h3 class="service-card__title" data-aos="fade-right" data-aos-delay="<?= $d + 150 ?>" data-aos-duration="600"><?= $svc['title'] ?></h3>
                        <p class="service-card__desc" data-aos="fade-up" data-aos-delay="<?= $d + 200 ?>" data-aos-duration="600"><?= $svc['desc'] ?></p>
                        <a href="<?= htmlspecialchars($svc['href']) ?>" class="service-card__link" data-aos="fade-up" data-aos-delay="<?= $d + 250 ?>" data-aos-duration="500">Learn More
                            <span data-icon="arrowRight"></span>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ SERVICES SECTION -->

        <!-- ===== ABOUT SECTION ===== -->
        <section class="about-section" id="about">
            <div class="container-90">
                <div class="about-inner">

                    <!-- Left: Brand statement -->
                    <div class="about-left">
                        <span class="about-eyebrow" data-aos="fade-right" data-aos-duration="600">About Us</span>
                        <h2 class="about-title" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
                            A Team of Highly Passionate <span>Designers</span> &amp; <span>Developers</span>
                        </h2>
                        <p class="about-desc" data-aos="fade-right" data-aos-delay="200" data-aos-duration="700">
                            Core Webpro is a team of highly passionate web designers and developers. We do ordinary things extraordinarily well. Our team is driven by the desire to excel — but our determination and commitment to an unrelenting pursuit of your goal enables us to attain the success that we seek.
                        </p>
                        <a href="about.php" class="btn-about-cta" data-aos="fade-up" data-aos-delay="320" data-aos-duration="600">
                            Know More
                            <span data-icon="arrowRight"></span>
                        </a>
                    </div>

                    <!-- Right: 2×2 feature grid -->
                    <?php require_once 'components/about-features-data.php'; ?>
                    <div class="about-right">
                        <div class="about-features">

                            <?php foreach ($about_features as $i => $feat):
                                $d = 150 + ($i * 100);
                            ?>
                            <div class="about-feature" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="650">
                                <div class="about-feature__icon" data-aos="zoom-in" data-aos-delay="<?= $d + 100 ?>" data-aos-duration="500">
                                    <span data-icon="<?= $feat['icon'] ?>"></span>
                                </div>
                                <h4 class="about-feature__title" data-aos="fade-right" data-aos-delay="<?= $d + 150 ?>" data-aos-duration="500"><?= htmlspecialchars($feat['title']) ?></h4>
                                <p class="about-feature__desc" data-aos="fade-up" data-aos-delay="<?= $d + 200 ?>" data-aos-duration="500"><?= htmlspecialchars($feat['desc']) ?></p>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--/ ABOUT SECTION -->

        <!-- ===== PROCESS SECTION ===== -->
        <?php require_once 'components/process-data.php'; ?>
        <section class="process-section" id="process">
            <div class="container-90">

                <!-- Header -->
                <div class="process-header">
                    <span class="process-eyebrow" data-aos="fade-down" data-aos-duration="600">How We Work</span>
                    <h2 class="process-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">Our <span>Awesome</span> Process</h2>
                    <p class="process-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">There are numerous steps in the website design and development process — from gathering initial information to the creation of your web site.</p>
                </div>

                <!-- Steps -->
                <div class="process-steps">
                    <?php foreach ($process_steps as $i => $step):
                        $d  = $i * 100;
                        $num = sprintf('%02d', $i + 1);
                    ?>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="700">
                        <div class="process-step__badge"><span><?= $num ?></span></div>
                        <div class="process-step__icon" data-aos="zoom-in" data-aos-delay="<?= $d + 100 ?>" data-aos-duration="500">
                            <span data-icon="<?= $step['icon'] ?>"></span>
                        </div>
                        <h4 class="process-step__title" data-aos="fade-up" data-aos-delay="<?= $d + 150 ?>" data-aos-duration="500"><?= htmlspecialchars($step['title']) ?></h4>
                        <p class="process-step__desc" data-aos="fade-up" data-aos-delay="<?= $d + 200 ?>" data-aos-duration="500"><?= htmlspecialchars($step['desc']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ PROCESS SECTION -->

        <!-- ===== OUR CLIENTS SECTION ===== -->
        <?php require_once 'components/clients-data.php'; ?>
        <section class="our-clients-section" id="clients">

            <!-- Header with gradient bg -->
            <div class="clients-header">
                <div class="container-90">
                    <span class="clients-eyebrow" data-aos="fade-down" data-aos-duration="600">Our Clients</span>
                    <h2 class="clients-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">Trusted by <span>Industry Leaders</span></h2>
                    <p class="clients-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">We've had the privilege to work with amazing companies across industries — delivering results that speak for themselves.</p>
                </div>
            </div>

            <!-- Infinite scroll carousel — logos output twice for seamless CSS marquee -->
            <div class="clients-carousel" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                <div class="clients-track">
                    <?php foreach (array_merge($clients, $clients) as $client): ?>
                    <div class="client-logo">
                        <img src="img/logos-clients/<?= htmlspecialchars($client['file']) ?>" alt="<?= htmlspecialchars($client['alt']) ?>">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ OUR CLIENTS SECTION -->

        <!-- ===== TESTIMONIALS SECTION ===== -->
        <?php require_once 'components/testimonials-data.php'; ?>
        <section class="testimonials-section" id="testimonials">
            <div class="container-90">
                <!-- Header -->
                <div class="testi-header">
                    <span class="testi-eyebrow" data-aos="fade-down" data-aos-duration="600">Client Testimonials</span>
                    <h2 class="testi-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">Real Stories, <span>Real Results</span></h2>
                    <p class="testi-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">Don't just take our word for it — here's what our clients say about working with Core Web Pro.</p>
                </div>
                <!-- Swiper Carousel -->
                <div class="swiper testimonial-swiper" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <div class="swiper-wrapper">
                        <?php foreach ($testimonials as $t): ?>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card__quote">&ldquo;</div>
                                <p class="testi-text"><?= htmlspecialchars($t['text']) ?></p>
                                <div class="testi-stars" data-stars="<?= (int)$t['stars'] ?>"></div>
                                <div class="testi-card__divider"></div>
                                <div class="testi-author">
                                    <div class="testi-author__avatar" style="--av:<?= htmlspecialchars($t['color']) ?>"><?= htmlspecialchars($t['avatar']) ?></div>
                                    <div class="testi-author__info">
                                        <strong class="testi-author__name"><?= htmlspecialchars($t['name']) ?></strong>
                                        <span class="testi-author__role"><?= htmlspecialchars($t['role']) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Pagination -->
                    <div class="testi-pagination"></div>
                </div>

            </div>
        </section>
        <!--/ TESTIMONIALS SECTION -->

        <!-- ===== TECHNOLOGIES SECTION ===== -->
        <?php require_once 'components/tech-data.php'; ?>
        <section class="tech-section" id="technologies">
            <div class="container-90">

                <!-- Header -->
                <div class="tech-header">
                    <span class="tech-eyebrow" data-aos="fade-down" data-aos-duration="600">Our Tech Stack</span>
                    <h2 class="tech-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">Tools &amp; Technologies <span>We Use</span></h2>
                    <p class="tech-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">We leverage the latest free and open-source tools to design and build scalable, modern digital products.</p>
                </div>

                <!-- Grid -->
                <div class="tech-grid">
                    <?php foreach ($technologies as $i => $tech):
                        $d = ($i % 7) * 50;
                    ?>
                    <div class="tech-item" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="600">
                        <div class="tech-item__icon"><i class="<?= htmlspecialchars($tech['icon']) ?> colored"></i></div>
                        <span class="tech-item__name"><?= htmlspecialchars($tech['name']) ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!--/ TECHNOLOGIES SECTION -->

        <!-- ===== RECENT BLOGS SECTION ===== -->
        <?php
        require_once 'components/blog-data.php';
        ?>
        <section class="blogs-section" id="blogs">
            <div class="container-90">

                <div class="blogs-header" data-aos="fade-up" data-aos-duration="700">
                    <div class="blogs-header__left">
                        <span class="blogs-eyebrow">Our Blog</span>
                        <h2 class="blogs-title">Latest <span>Insights</span> &amp; Articles</h2>
                        <p class="blogs-subtitle">Stay ahead with expert tips, industry trends and deep dives into web design, development and emerging technologies.</p>
                    </div>
                    <a href="blogs.php" class="blogs-view-all">View All Blogs <span class="blogs-view-all__arrow">&#8599;</span></a>
                </div>

                <div class="blogs-grid">
                    <?php
                    $home_posts = array_slice($blog_posts, 0, 4);
                    foreach ($home_posts as $i => $post) {
                        $delay = $i * 100;
                        include 'components/blog-card.php';
                    }
                    ?>
                </div>

            </div>
        </section>
        <!--/ RECENT BLOGS SECTION -->

    </main>
    <!--/ MAIN -->

<?php include 'components/footer.php'; ?>
