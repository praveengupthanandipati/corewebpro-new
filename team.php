<?php
$page_meta = '
    <title>Our Team | Core Web Pro – Web Design Agency in Hyderabad</title>
    <meta name="description" content="Meet the talented designers and developers behind Core Web Pro — a Hyderabad freelance web design agency delivering exceptional digital experiences for 8+ years.">
    <meta name="keywords" content="web design team Hyderabad, Core Web Pro team, web designer Hyderabad, UI UX designer Hyderabad, frontend developer Hyderabad, web development team Telangana, join web design agency Hyderabad">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/team.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Our Team | Core Web Pro – Web Design Agency in Hyderabad">
    <meta property="og:description" content="Meet the passionate team behind Core Web Pro — delivering exceptional web design, development and digital marketing in Hyderabad.">
    <meta property="og:url" content="https://www.corewebpro.com/team.php">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
';
include 'components/header.php';
?>

    <!-- ===== PAGE HERO ===== -->
    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">Our Team</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Our Team</span>
                </nav>
            </div>
        </div>
    </section>
    <!--/ PAGE HERO -->

    <main>

        <!-- ===== TEAM MEMBERS ===== -->
        <section class="inner-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">The People Behind the Work</span>
                    <h2 class="inner-title">Meet Our <span>Creative Team</span></h2>
                    <p class="inner-subtitle">Talented individuals united by a passion for great design, clean code and delivering work that makes a real difference for our clients.</p>
                </div>

                <?php require_once 'components/team-data.php'; ?>
                <div class="team-grid">

                    <?php foreach ($team_members as $i => $member): $d = $i * 120; ?>
                    <div class="team-card" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="700">
                        <div class="team-card__body">
                            <span class="team-card__exp"><?= htmlspecialchars($member['exp']) ?></span>
                            <h3 class="team-card__name"><?= htmlspecialchars($member['name']) ?></h3>
                            <p class="team-card__role"><?= htmlspecialchars($member['role']) ?></p>
                            <p class="team-card__bio"><?= htmlspecialchars($member['bio']) ?></p>
                            <div class="team-card__skills">
                                <?php foreach ($member['skills'] as $skill): ?>
                                <span class="team-tag"><?= htmlspecialchars($skill) ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="team-card__social">
                                <?php foreach ($member['social'] as $link): ?>
                                <a href="<?= htmlspecialchars($link['href']) ?>" aria-label="<?= htmlspecialchars($link['label']) ?>" class="team-card__social-link">
                                    <?= $link['svg'] ?>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!--/ TEAM MEMBERS -->

        <!-- ===== WHY JOIN US ===== -->
        <section class="inner-section inner-section--alt">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Grow With Us</span>
                    <h2 class="inner-title">Why Join <span>Core Web Pro?</span></h2>
                    <p class="inner-subtitle">We're always looking for passionate designers and developers who want to do their best work in a collaborative, flexible environment. Here's what makes us different.</p>
                </div>

                <div class="join-grid">

                    <?php foreach ($join_reasons as $i => $reason): $d = $i * 80; ?>
                    <div class="join-card" data-aos="fade-up" data-aos-delay="<?= $d ?>" data-aos-duration="650">
                        <div class="join-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $reason['svg'] ?></svg>
                        </div>
                        <h4 class="join-card__title"><?= htmlspecialchars($reason['title']) ?></h4>
                        <p class="join-card__desc"><?= htmlspecialchars($reason['desc']) ?></p>
                    </div>
                    <?php endforeach; ?>

                </div>

                <!-- Open Positions CTA -->
                <div class="join-cta" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div class="join-cta__inner">
                        <div class="join-cta__text">
                            <h3>Interested in Working With Us?</h3>
                            <p>Send us your portfolio and a short intro — we're always open to meeting talented people, even when we're not actively hiring.</p>
                        </div>
                        <div class="join-cta__actions">
                            <a href="mailto:info@corewebpro.com?subject=Join%20Core%20Web%20Pro" class="btn-cta-primary">Send Your Portfolio</a>
                            <a href="https://wa.me/917799971112?text=Hi%2C%20I%27m%20interested%20in%20joining%20Core%20Web%20Pro!" class="btn-cta-outline" target="_blank" rel="noopener noreferrer">WhatsApp Us</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--/ WHY JOIN US -->

    </main>

<?php include 'components/footer.php'; ?>
