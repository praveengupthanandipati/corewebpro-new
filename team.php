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

                <div class="team-grid">

                    <!-- Member 1 -->
                    <div class="team-card" data-aos="fade-up" data-aos-delay="0" data-aos-duration="700">
                        <div class="team-card__photo-wrap">
                            <img src="https://picsum.photos/seed/praveen2025/400/420" alt="Praveen Kumar – Founder & Lead Designer" class="team-card__photo" loading="lazy">
                            <div class="team-card__overlay">
                                <div class="team-card__social">
                                    <a href="#" aria-label="LinkedIn" class="team-card__social-link">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                                    </a>
                                    <a href="#" aria-label="Twitter" class="team-card__social-link">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
                                    </a>
                                    <a href="mailto:praveen@corewebpro.com" aria-label="Email" class="team-card__social-link">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 01-2.06 0L2 7"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-card__body">
                            <span class="team-card__exp">8+ Yrs Experience</span>
                            <h3 class="team-card__name">Praveen Kumar</h3>
                            <p class="team-card__role">Founder &amp; Lead Designer</p>
                            <p class="team-card__bio">With over 8 years in the industry, Praveen leads Core Web Pro's creative direction. He specialises in building conversion-driven websites and brand identities that help businesses grow. His deep knowledge of design systems, UX strategy and frontend engineering ensures every project is both beautiful and functional.</p>
                            <div class="team-card__skills">
                                <span class="team-tag">UI/UX Design</span>
                                <span class="team-tag">Web Development</span>
                                <span class="team-tag">Brand Identity</span>
                                <span class="team-tag">WordPress</span>
                                <span class="team-tag">Laravel</span>
                            </div>
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="team-card" data-aos="fade-up" data-aos-delay="120" data-aos-duration="700">
                        <div class="team-card__photo-wrap">
                            <img src="https://picsum.photos/seed/ananya2025/400/420" alt="Ananya Reddy – Senior UI/UX Designer" class="team-card__photo" loading="lazy">
                            <div class="team-card__overlay">
                                <div class="team-card__social">
                                    <a href="#" aria-label="LinkedIn" class="team-card__social-link">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                                    </a>
                                    <a href="#" aria-label="Behance" class="team-card__social-link">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M7.803 5.731c.589 0 1.119.051 1.605.155.483.103.895.273 1.243.508.343.235.611.547.804.939.187.387.28.855.28 1.39 0 .596-.135 1.091-.406 1.482-.271.393-.675.718-1.209.979.73.209 1.274.573 1.634 1.089.357.519.538 1.141.538 1.862 0 .607-.116 1.128-.35 1.563-.232.435-.551.79-.951 1.055-.401.267-.865.462-1.39.585-.523.123-1.06.184-1.608.184H2V5.731h5.803zm-.351 4.972c.47 0 .856-.109 1.151-.332.295-.22.443-.569.443-1.034 0-.265-.046-.485-.138-.661-.09-.175-.217-.317-.38-.42-.16-.103-.35-.178-.568-.219-.219-.04-.455-.062-.707-.062H4.965v2.728h2.487zm.157 5.239c.277 0 .537-.026.777-.08.241-.053.449-.14.625-.261.177-.12.315-.283.414-.49.101-.208.15-.475.15-.798 0-.634-.178-1.084-.533-1.351-.356-.265-.831-.4-1.422-.4H4.965v3.38h2.644zM16.612 6.16h4.836v1.263h-4.836V6.16zm.764 10.202c.382.372.93.558 1.644.558.511 0 .952-.129 1.321-.384.369-.255.595-.527.678-.814h2.176c-.349 1.094-.886 1.877-1.615 2.353-.726.476-1.607.714-2.641.714-.717 0-1.363-.116-1.936-.35-.573-.232-1.059-.562-1.455-.987-.397-.427-.703-.934-.917-1.523-.215-.588-.321-1.232-.321-1.933 0-.679.109-1.31.325-1.891.216-.58.525-1.081.927-1.504.401-.421.882-.751 1.444-.987.562-.235 1.183-.352 1.864-.352.762 0 1.433.147 2.01.441.578.293 1.056.693 1.432 1.197.375.503.645 1.082.806 1.736.163.654.219 1.346.169 2.076h-6.497c.033.815.266 1.437.586 1.649zm2.887-4.487c-.302-.332-.786-.498-1.45-.498-.413 0-.757.07-1.032.208-.273.14-.493.311-.661.513-.168.204-.286.42-.353.649-.069.229-.107.444-.117.641h4.133c-.084-.718-.317-1.18-.52-1.513z"/></svg>
                                    </a>
                                    <a href="mailto:ananya@corewebpro.com" aria-label="Email" class="team-card__social-link">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 01-2.06 0L2 7"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-card__body">
                            <span class="team-card__exp">5+ Yrs Experience</span>
                            <h3 class="team-card__name">Ananya Reddy</h3>
                            <p class="team-card__role">Senior UI/UX Designer</p>
                            <p class="team-card__bio">Ananya brings creativity and user empathy to every interface she designs. She is passionate about crafting experiences that feel intuitive and look stunning — from initial wireframes and prototypes to polished, production-ready design systems. Her Figma skills and attention to detail set the visual standard for every project.</p>
                            <div class="team-card__skills">
                                <span class="team-tag">Figma</span>
                                <span class="team-tag">Prototyping</span>
                                <span class="team-tag">Design Systems</span>
                                <span class="team-tag">Adobe XD</span>
                                <span class="team-tag">Illustration</span>
                            </div>
                        </div>
                    </div>

                    <!-- Member 3 -->
                    <div class="team-card" data-aos="fade-up" data-aos-delay="240" data-aos-duration="700">
                        <div class="team-card__photo-wrap">
                            <img src="https://picsum.photos/seed/ravi2025/400/420" alt="Ravi Shankar – Frontend Developer" class="team-card__photo" loading="lazy">
                            <div class="team-card__overlay">
                                <div class="team-card__social">
                                    <a href="#" aria-label="LinkedIn" class="team-card__social-link">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                                    </a>
                                    <a href="#" aria-label="GitHub" class="team-card__social-link">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>
                                    </a>
                                    <a href="mailto:ravi@corewebpro.com" aria-label="Email" class="team-card__social-link">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 01-2.06 0L2 7"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-card__body">
                            <span class="team-card__exp">4+ Yrs Experience</span>
                            <h3 class="team-card__name">Ravi Shankar</h3>
                            <p class="team-card__role">Frontend Developer</p>
                            <p class="team-card__bio">Ravi transforms design concepts into fast, responsive and accessible web experiences. He specialises in React, Vue and vanilla JavaScript, with a strong grasp of performance optimisation and SEO-friendly markup. His code is clean, documented and built to last — every animation, interaction and component is crafted with precision.</p>
                            <div class="team-card__skills">
                                <span class="team-tag">React</span>
                                <span class="team-tag">Vue.js</span>
                                <span class="team-tag">JavaScript</span>
                                <span class="team-tag">Tailwind CSS</span>
                                <span class="team-tag">Git</span>
                            </div>
                        </div>
                    </div>

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

                    <div class="join-card" data-aos="fade-up" data-aos-delay="0" data-aos-duration="650">
                        <div class="join-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-4 0v2M8 7V5a2 2 0 014 0"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>
                        </div>
                        <h4 class="join-card__title">Flexible Remote Work</h4>
                        <p class="join-card__desc">Work from wherever you are most productive. We're a remote-first team — no rigid 9-to-5, no unnecessary commutes. Results and quality are what matter here.</p>
                    </div>

                    <div class="join-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="650">
                        <div class="join-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <h4 class="join-card__title">Real, Impactful Projects</h4>
                        <p class="join-card__desc">Work on live websites and apps for real clients across various industries — from startups and local businesses to growing brands. No dummy projects or busywork.</p>
                    </div>

                    <div class="join-card" data-aos="fade-up" data-aos-delay="160" data-aos-duration="650">
                        <div class="join-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                        </div>
                        <h4 class="join-card__title">Collaborative Culture</h4>
                        <p class="join-card__desc">No corporate politics or hierarchies. Every team member has a voice, ideas are welcomed openly and your contribution is always visible and appreciated.</p>
                    </div>

                    <div class="join-card" data-aos="fade-up" data-aos-delay="240" data-aos-duration="650">
                        <div class="join-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                        </div>
                        <h4 class="join-card__title">Skill Growth &amp; Learning</h4>
                        <p class="join-card__desc">We stay on top of the latest tools, frameworks and design trends. You'll be constantly learning — and we actively support courses, workshops and self-improvement time.</p>
                    </div>

                    <div class="join-card" data-aos="fade-up" data-aos-delay="320" data-aos-duration="650">
                        <div class="join-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                        </div>
                        <h4 class="join-card__title">Competitive Pay</h4>
                        <p class="join-card__desc">We offer fair, competitive compensation matched to your experience and skills. Performance bonuses, project-based incentives and timely payments are standard practice.</p>
                    </div>

                    <div class="join-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="650">
                        <div class="join-card__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                        </div>
                        <h4 class="join-card__title">Portfolio-Worthy Work</h4>
                        <p class="join-card__desc">Every project you touch is something you'll be proud to showcase. We encourage team members to add their best work to their portfolios — your career growth matters to us.</p>
                    </div>

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
