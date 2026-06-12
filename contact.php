<?php
/* ============================================================
   CONTACT FORM HANDLER
   ============================================================ */
$ctct_success = false;
$ctct_error   = '';
$ctct_form    = [
    'name'    => '',
    'email'   => '',
    'phone'   => '',
    'message' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ctct_submit'])) {

    // Honeypot — bots fill this hidden field; humans leave it blank
    if (!empty($_POST['website_url'])) {
        $ctct_success = true; // silently discard
    } else {
        // Sanitise
        $ctct_form['name']    = trim(strip_tags($_POST['name']    ?? ''));
        $ctct_form['email']   = trim(strip_tags($_POST['email']   ?? ''));
        $ctct_form['phone']   = trim(strip_tags($_POST['phone']   ?? ''));
        $ctct_form['message'] = trim(strip_tags($_POST['message'] ?? ''));

        // Server-side validate
        if (strlen($ctct_form['name']) < 2) {
            $ctct_error = 'Please enter your full name (at least 2 characters).';
        } elseif (!filter_var($ctct_form['email'], FILTER_VALIDATE_EMAIL)) {
            $ctct_error = 'Please enter a valid email address.';
        } elseif (strlen($ctct_form['message']) < 10) {
            $ctct_error = 'Your message is too short — please give us a little more detail.';
        } else {
            $to      = 'info@corewebpro.in';
            $subject = 'New Contact Enquiry from ' . $ctct_form['name'] . ' - Core Web Pro';

            $body  = "New contact enquiry from the Core Web Pro website.\n";
            $body .= str_repeat('-', 50) . "\n\n";
            $body .= "Name    : {$ctct_form['name']}\n";
            $body .= "Email   : {$ctct_form['email']}\n";
            $body .= "Phone   : " . ($ctct_form['phone'] ?: 'Not provided') . "\n\n";
            $body .= "Message :\n{$ctct_form['message']}\n\n";
            $body .= str_repeat('-', 50) . "\n";
            $body .= "Sent via corewebpro.in/contact.php\n";

            $headers  = "From: no-reply@corewebpro.in\r\n";
            $headers .= "Reply-To: {$ctct_form['email']}\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
            $headers .= "MIME-Version: 1.0\r\n";

            if (mail($to, $subject, $body, $headers)) {
                $ctct_success = true;
                $ctct_form    = array_fill_keys(array_keys($ctct_form), '');
            } else {
                $ctct_error = 'Sorry, we could not send your message right now. Please email us directly at <a href="mailto:info@corewebpro.in">info@corewebpro.in</a> or WhatsApp us.';
            }
        }
    }
}

/* ============================================================
   PAGE META
   ============================================================ */
$page_meta = '
    <title>Contact Us | Core Web Pro – Web Design Agency Hyderabad</title>
    <meta name="description" content="Get in touch with Core Web Pro — Hyderabad\'s trusted web design, development and SEO agency. Call, WhatsApp or fill the enquiry form for a free consultation.">
    <meta name="keywords" content="contact Core Web Pro, web design agency Hyderabad contact, hire web designer Hyderabad, web development enquiry Hyderabad, Core Web Pro phone number">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/contact.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Contact Us | Core Web Pro – Hyderabad Web Design Agency">
    <meta property="og:description" content="Reach out to Core Web Pro for web design, development, SEO and digital marketing enquiries. Free consultation within 24 hours.">
    <meta property="og:url" content="https://www.corewebpro.com/contact.php">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
';
include 'components/header.php';
?>

    <!-- ===== PAGE HERO ===== -->
    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">Contact Us</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Contact</span>
                </nav>
            </div>
        </div>
    </section>
    <!--/ PAGE HERO -->

    <main>

        <!-- ===== CONTACT INFO CARDS ===== -->
        <section class="inner-section ctct-cards-section" style="padding-bottom:0;">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">Get In Touch</span>
                    <h2 class="inner-title">Let's Build Something <span>Great Together</span></h2>
                    <p class="inner-subtitle">We're a Hyderabad-based team of designers and developers. Whether you have a project brief or just an idea — we'd love to hear from you.</p>
                </div>

                <?php require_once 'components/contact-data.php'; ?>
                <div class="ctct-info-grid">

                    <?php foreach ($contact_cards as $i => $card): $d = $i * 100; ?>
                    <div class="ctct-info-card" data-aos="fade-up" data-aos-duration="600" data-aos-delay="<?= $d ?>">
                        <div class="ctct-info-card__icon <?= $card['icon_mod'] ?>">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $card['svg'] ?></svg>
                        </div>
                        <h4 class="ctct-info-card__title"><?= htmlspecialchars($card['title']) ?></h4>
                        <p class="ctct-info-card__body"><?= $card['body'] ?></p>
                        <?php if ($card['link_href']): ?>
                        <a href="<?= htmlspecialchars($card['link_href']) ?>" class="ctct-info-card__link"<?= $card['link_ext'] ? ' target="_blank" rel="noopener noreferrer"' : '' ?>><?= htmlspecialchars($card['link_text']) ?></a>
                        <?php elseif ($card['badge_text']): ?>
                        <span class="ctct-info-card__badge <?= $card['badge_class'] ?>"><?= htmlspecialchars($card['badge_text']) ?></span>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- ===== CONTACT FORM + SIDE INFO ===== -->
        <section class="inner-section ctct-main-section">
            <div class="container-90">
                <div class="ctct-main-wrap">

                    <!-- ── LEFT: FORM ── -->
                    <div class="ctct-form-wrap" data-aos="fade-right" data-aos-duration="700">
                        <div class="ctct-form-head">
                            <h3>Contact us</h3>
                            <p>Fill in the form below and we'll get back to you within 24 hours with a tailored quote.</p>
                        </div>

                        <div id="ctct-form-anchor" style="position:relative;top:-80px;"></div>

                        <?php if ($ctct_success): ?>
                        <div class="ctct-success-msg" role="alert">
                            <div class="ctct-success-msg__icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <strong>Message sent successfully!</strong>
                                <p>Thank you <?= htmlspecialchars($ctct_form['name'] ?: '') ?> — we've received your message and will get back to you within 24 hours. Check your spam folder if you don't hear from us.</p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($ctct_error): ?>
                        <div class="ctct-error-msg" role="alert">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            <span><?= $ctct_error ?></span>
                        </div>
                        <?php endif; ?>

                        <?php if (!$ctct_success): ?>
                        <form id="ctctForm" class="ctct-form" method="POST" action="contact.php#ctct-form-anchor" novalidate>
                            <input type="hidden" name="ctct_submit" value="1">
                            <!-- Honeypot — hidden from real users -->
                            <input type="text" name="website_url" class="ctct-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">

                            <div class="ctct-form__row ctct-form__row--3">
                                <div class="ctct-form__group">
                                    <label class="ctct-form__label" for="ctct_name">Full Name <span class="ctct-req">*</span></label>
                                    <input
                                        type="text"
                                        id="ctct_name"
                                        name="name"
                                        class="ctct-form__input"
                                        placeholder="Rajesh Kumar"
                                        value="<?= htmlspecialchars($ctct_form['name']) ?>"
                                        required
                                        minlength="2"
                                        autocomplete="name"
                                    >
                                    <span class="ctct-form__error" id="err_name"></span>
                                </div>
                                <div class="ctct-form__group">
                                    <label class="ctct-form__label" for="ctct_email">Email Address <span class="ctct-req">*</span></label>
                                    <input
                                        type="email"
                                        id="ctct_email"
                                        name="email"
                                        class="ctct-form__input"
                                        placeholder="rajesh@example.com"
                                        value="<?= htmlspecialchars($ctct_form['email']) ?>"
                                        required
                                        autocomplete="email"
                                    >
                                    <span class="ctct-form__error" id="err_email"></span>
                                </div>
                                <div class="ctct-form__group">
                                    <label class="ctct-form__label" for="ctct_phone">Phone Number</label>
                                    <input
                                        type="tel"
                                        id="ctct_phone"
                                        name="phone"
                                        class="ctct-form__input"
                                        placeholder="+91 98765 43210"
                                        value="<?= htmlspecialchars($ctct_form['phone']) ?>"
                                        autocomplete="tel"
                                    >
                                    <span class="ctct-form__error" id="err_phone"></span>
                                </div>
                            </div>

                            <div class="ctct-form__group">
                                <label class="ctct-form__label" for="ctct_message">Your Message <span class="ctct-req">*</span></label>
                                <textarea
                                    id="ctct_message"
                                    name="message"
                                    class="ctct-form__input ctct-form__textarea"
                                    placeholder="Tell us about your project, goals, timeline or any questions you have…"
                                    required
                                    minlength="10"
                                    rows="5"
                                ><?= htmlspecialchars($ctct_form['message']) ?></textarea>
                                <span class="ctct-form__error" id="err_message"></span>
                                <span class="ctct-form__char-count" id="msgCharCount">0 / 1000</span>
                            </div>

                            <button type="submit" class="ctct-form__submit" id="ctctSubmitBtn">
                                <span class="ctct-form__submit-label">Send Enquiry</span>
                                <svg class="ctct-form__submit-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                <svg class="ctct-form__submit-spin" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10" stroke-dasharray="31.4" stroke-dashoffset="10"/></svg>
                            </button>

                            <p class="ctct-form__note">We respect your privacy. Your information is never shared with third parties.</p>
                        </form>
                        <?php endif; ?>
                    </div>

                    <!-- ── RIGHT: DETAILS & QUICK CONNECT ── -->
                    <div class="ctct-side" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">

                        <!-- Business Hours -->
                        <div class="ctct-hours-wrap">
                            <h4 class="ctct-side__heading">Business Hours</h4>
                            <ul class="ctct-hours-list">
                                <?php foreach ($contact_hours as $row): ?>
                                <li class="ctct-hours-list__item <?= $row['item_mod'] ?>">
                                    <span class="ctct-hours-list__day"><?= htmlspecialchars($row['day']) ?></span>
                                    <span class="ctct-hours-list__time"><?= htmlspecialchars($row['time']) ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="ctct-hours-note">All times IST (UTC +5:30). Emergency support available via WhatsApp for active projects.</p>
                        </div>

                        <!-- Social Links -->
                        <div class="ctct-social-wrap">
                            <h4 class="ctct-side__heading">Follow Us</h4>
                            <div class="ctct-social-grid">
                                <?php foreach ($contact_social as $social): ?>
                                <a href="<?= htmlspecialchars($social['href']) ?>" class="ctct-social-item <?= $social['item_mod'] ?>" aria-label="<?= htmlspecialchars($social['aria']) ?>" target="_blank" rel="noopener noreferrer">
                                    <?= $social['svg'] ?>
                                    <span><?= htmlspecialchars($social['label']) ?></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FAQ ===== -->
        <section class="inner-section dsvc-faq-section">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">FAQ</span>
                    <h2 class="inner-title">Common <span>Questions</span></h2>
                </div>

                <div class="dsvc-faq" data-aos="fade-up" data-aos-duration="600" data-aos-delay="80">

                    <?php foreach ($contact_faqs as $faq): ?>
                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false"><?= htmlspecialchars($faq['q']) ?></button>
                        <div class="faq-a"><?= $faq['a'] ?></div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

    </main>

    <script>
    /* ============================================================
       CONTACT FORM — CLIENT-SIDE VALIDATION
       ============================================================ */
    (function () {
        var form      = document.getElementById('ctctForm');
        if (!form) return;

        var nameEl    = document.getElementById('ctct_name');
        var emailEl   = document.getElementById('ctct_email');
        var phoneEl   = document.getElementById('ctct_phone');
        var msgEl     = document.getElementById('ctct_message');
        var countEl   = document.getElementById('msgCharCount');
        var submitBtn = document.getElementById('ctctSubmitBtn');

        // Character counter for textarea
        if (msgEl && countEl) {
            msgEl.addEventListener('input', function () {
                var len = msgEl.value.length;
                countEl.textContent = len + ' / 1000';
                if (len > 950) countEl.style.color = '#ef4444';
                else           countEl.style.color = '';
                if (len > 1000) msgEl.value = msgEl.value.substring(0, 1000);
            });
        }

        function setError(id, msg) {
            var el = document.getElementById('err_' + id);
            var inp = document.getElementById('ctct_' + id);
            if (el)  { el.textContent = msg; el.style.display = msg ? 'block' : 'none'; }
            if (inp) { msg ? inp.classList.add('ctct-form__input--err') : inp.classList.remove('ctct-form__input--err'); }
        }

        function clearError(id) { setError(id, ''); }

        function validateEmail(v) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
        }

        function validatePhone(v) {
            return v === '' || /^[+]?[\d\s\-().]{7,15}$/.test(v);
        }

        // Live validation on blur
        if (nameEl)  nameEl.addEventListener('blur',  function () {
            setError('name', nameEl.value.trim().length < 2 ? 'Please enter your full name.' : '');
        });
        if (emailEl) emailEl.addEventListener('blur', function () {
            setError('email', !validateEmail(emailEl.value.trim()) ? 'Please enter a valid email address.' : '');
        });
        if (phoneEl) phoneEl.addEventListener('blur', function () {
            setError('phone', !validatePhone(phoneEl.value.trim()) ? 'Please enter a valid phone number.' : '');
        });
        if (msgEl)   msgEl.addEventListener('blur',   function () {
            setError('message', msgEl.value.trim().length < 10 ? 'Please describe your project (at least 10 characters).' : '');
        });

        // Clear errors on focus
        [nameEl, emailEl, phoneEl, msgEl].forEach(function (el) {
            if (el) el.addEventListener('focus', function () {
                clearError(el.id.replace('ctct_', ''));
            });
        });

        // Submit validation
        form.addEventListener('submit', function (e) {
            var valid = true;

            if (!nameEl || nameEl.value.trim().length < 2) {
                setError('name', 'Please enter your full name.');
                valid = false;
            }
            if (!emailEl || !validateEmail(emailEl.value.trim())) {
                setError('email', 'Please enter a valid email address.');
                valid = false;
            }
            if (phoneEl && !validatePhone(phoneEl.value.trim())) {
                setError('phone', 'Please enter a valid phone number or leave it blank.');
                valid = false;
            }
            if (!msgEl || msgEl.value.trim().length < 10) {
                setError('message', 'Please describe your project (at least 10 characters).');
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
                // Scroll to first error
                var firstErr = form.querySelector('.ctct-form__input--err');
                if (firstErr) firstErr.scrollIntoView({ behavior: 'smooth', block: 'center' });
                return;
            }

            // GA4 — track form submission as a lead conversion
            if (typeof gtag === 'function') {
                gtag('event', 'generate_lead', {
                    event_category: 'Contact Form',
                    event_label: 'contact.php'
                });
            }

            // Show loading state
            if (submitBtn) {
                submitBtn.classList.add('ctct-form__submit--loading');
                submitBtn.disabled = true;
            }
        });
    })();

    </script>

<?php include 'components/footer.php'; ?>
