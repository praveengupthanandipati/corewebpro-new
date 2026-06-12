<?php
/* ============================================================
   ENQUIRY FORM HANDLER
   ============================================================ */
$enq_success = false;
$enq_error   = '';
$enq_form    = [
    'name'        => '',
    'company'     => '',
    'location'    => '',
    'phone'       => '',
    'email'       => '',
    'project_type'=> '',
    'existing_url'=> '',
    'technologies'=> [],
    'budget'      => '',
    'timeline'    => '',
    'source'      => '',
    'description' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enq_submit'])) {

    // Honeypot
    if (!empty($_POST['website_verify'])) {
        $enq_success = true;
    } else {
        // Sanitise
        $enq_form['name']         = trim(strip_tags($_POST['name']         ?? ''));
        $enq_form['company']      = trim(strip_tags($_POST['company']      ?? ''));
        $enq_form['location']     = trim(strip_tags($_POST['location']     ?? ''));
        $enq_form['phone']        = trim(strip_tags($_POST['phone']        ?? ''));
        $enq_form['email']        = trim(strip_tags($_POST['email']        ?? ''));
        $enq_form['project_type'] = trim(strip_tags($_POST['project_type'] ?? ''));
        $enq_form['existing_url'] = trim(strip_tags($_POST['existing_url'] ?? ''));
        $enq_form['budget']       = trim(strip_tags($_POST['budget']       ?? ''));
        $enq_form['timeline']     = trim(strip_tags($_POST['timeline']     ?? ''));
        $enq_form['source']       = trim(strip_tags($_POST['source']       ?? ''));
        $enq_form['description']  = trim(strip_tags($_POST['description']  ?? ''));

        // Technologies (array of checkboxes)
        $raw_tech = $_POST['technologies'] ?? [];
        $allowed_tech = ['WordPress','Laravel','React.js','Next.js','Vue.js','Angular','Flutter','React Native','Python / Django','Node.js','MySQL','MongoDB','Custom / Not Sure'];
        $enq_form['technologies'] = array_values(array_intersect((array)$raw_tech, $allowed_tech));

        // Validate
        if (strlen($enq_form['name']) < 2) {
            $enq_error = 'Please enter your full name.';
        } elseif (!filter_var($enq_form['email'], FILTER_VALIDATE_EMAIL)) {
            $enq_error = 'Please enter a valid email address.';
        } elseif (empty($enq_form['project_type'])) {
            $enq_error = 'Please select a project type.';
        } elseif (strlen($enq_form['description']) < 20) {
            $enq_error = 'Please describe your project in at least 20 characters.';
        } else {
            $tech_list = !empty($enq_form['technologies']) ? implode(', ', $enq_form['technologies']) : 'Not specified';

            $body  = "NEW PROJECT ENQUIRY — Core Web Pro Website\n";
            $body .= str_repeat('=', 50) . "\n\n";
            $body .= "CONTACT DETAILS\n" . str_repeat('-', 30) . "\n";
            $body .= "Name         : {$enq_form['name']}\n";
            $body .= "Company      : " . ($enq_form['company']  ?: 'Not provided') . "\n";
            $body .= "Location     : " . ($enq_form['location'] ?: 'Not provided') . "\n";
            $body .= "Phone        : " . ($enq_form['phone']    ?: 'Not provided') . "\n";
            $body .= "Email        : {$enq_form['email']}\n\n";
            $body .= "PROJECT DETAILS\n" . str_repeat('-', 30) . "\n";
            $body .= "Project Type : {$enq_form['project_type']}\n";
            $body .= "Existing URL : " . ($enq_form['existing_url'] ?: 'None / New project') . "\n";
            $body .= "Technologies : {$tech_list}\n";
            $body .= "Budget       : " . ($enq_form['budget']   ?: 'Not specified') . "\n";
            $body .= "Timeline     : " . ($enq_form['timeline'] ?: 'Not specified') . "\n\n";
            $body .= "PROJECT DESCRIPTION\n" . str_repeat('-', 30) . "\n";
            $body .= "{$enq_form['description']}\n\n";
            $body .= "How they found us : " . ($enq_form['source'] ?: 'Not specified') . "\n";
            $body .= str_repeat('=', 50) . "\n";
            $body .= "Sent via corewebpro.com/enquiry.php\n";

            $to      = 'info@corewebpro.in';
            $subject = 'New Project Enquiry from ' . $enq_form['name'] . ' - Core Web Pro';

            $headers  = "From: no-reply@corewebpro.in\r\n";
            $headers .= "Reply-To: {$enq_form['email']}\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
            $headers .= "MIME-Version: 1.0\r\n";

            if (mail($to, $subject, $body, $headers)) {
                $enq_success = true;
                $enq_form = array_fill_keys(array_keys($enq_form), '');
                $enq_form['technologies'] = [];
            } else {
                $enq_error = 'Message could not be sent. Please email us directly at <a href="mailto:info@corewebpro.in">info@corewebpro.in</a>.';
            }
        }
    }
}

$tech_options = ['WordPress','Laravel','React.js','Next.js','Vue.js','Angular','Flutter','React Native','Python / Django','Node.js','MySQL','MongoDB','Custom / Not Sure'];

/* ============================================================
   PAGE META
   ============================================================ */
$page_meta = '
    <title>Project Enquiry | Core Web Pro – Get a Free Quote</title>
    <meta name="description" content="Submit your project enquiry to Core Web Pro and get a free, detailed quote within 24 hours. Web design, development, mobile apps, SEO — we build it all.">
    <meta name="keywords" content="project enquiry Hyderabad, get web design quote, hire web developer Hyderabad, free web design quote, Core Web Pro enquiry">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.corewebpro.com/enquiry.php">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Project Enquiry | Core Web Pro – Free Quote">
    <meta property="og:description" content="Tell us about your project and get a free tailored quote from Core Web Pro within 24 hours.">
    <meta property="og:url" content="https://www.corewebpro.com/enquiry.php">
    <meta property="og:image" content="https://www.corewebpro.com/img/og-image.jpg">
';
include 'components/header.php';
?>

    <!-- ===== PAGE HERO ===== -->
    <section class="page-hero">
        <div class="page-hero__overlay"></div>
        <div class="container-90">
            <div class="page-hero__inner">
                <h1 class="page-hero__title">Project Enquiry</h1>
                <nav class="page-hero__breadcrumb" aria-label="breadcrumb">
                    <a href="index.php">Home</a>
                    <span class="page-hero__sep">/</span>
                    <span>Enquiry</span>
                </nav>
            </div>
        </div>
    </section>

    <main>

        <!-- ===== ENQUIRY MAIN ===== -->
        <section class="inner-section enq-section">
            <div class="container-90">
                <div class="enq-wrap">

                    <!-- ── FORM ── -->
                    <div class="enq-form-col" data-aos="fade-right" data-aos-duration="700">

                        <div class="enq-form-head">
                            <span class="inner-eyebrow">Free Quote</span>
                            <h2 class="inner-title enq-form-title">Tell Us About <span>Your Project</span></h2>
                            <p class="enq-form-intro">Fill in the details below — the more you share, the more accurate your quote will be. We'll respond within 24 hours.</p>
                        </div>

                        <div id="enq-anchor" style="position:relative;top:-80px;"></div>

                        <?php if ($enq_success): ?>
                        <div class="ctct-success-msg enq-msg-spacing" role="alert">
                            <div class="ctct-success-msg__icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <strong>Enquiry submitted successfully!</strong>
                                <p>Thank you <?= htmlspecialchars($enq_form['name'] ?: '') ?> — we've received your project details and will send you a tailored quote within 24 hours.</p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($enq_error): ?>
                        <div class="ctct-error-msg enq-msg-spacing" role="alert">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            <span><?= $enq_error ?></span>
                        </div>
                        <?php endif; ?>

                        <?php if (!$enq_success): ?>
                        <form id="enqForm" class="enq-form" method="POST" action="enquiry.php#enq-anchor" novalidate>
                            <input type="hidden" name="enq_submit" value="1">
                            <input type="text" name="website_verify" class="ctct-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">

                            <!-- SECTION A: Contact Details -->
                            <div class="enq-section-label">
                                <span class="enq-section-num">01</span> Contact Details
                            </div>

                            <div class="enq-row enq-row--3">
                                <div class="enq-group">
                                    <label class="enq-label" for="enq_name">Full Name <span class="ctct-req">*</span></label>
                                    <input type="text" id="enq_name" name="name" class="enq-input" placeholder="Rajesh Kumar" value="<?= htmlspecialchars($enq_form['name']) ?>" required autocomplete="name">
                                    <span class="enq-error" id="enq_err_name"></span>
                                </div>
                                <div class="enq-group">
                                    <label class="enq-label" for="enq_phone">Contact Number <span class="ctct-req">*</span></label>
                                    <input type="tel" id="enq_phone" name="phone" class="enq-input" placeholder="+91 98765 43210" value="<?= htmlspecialchars($enq_form['phone']) ?>" required autocomplete="tel">
                                    <span class="enq-error" id="enq_err_phone"></span>
                                </div>
                                <div class="enq-group">
                                    <label class="enq-label" for="enq_email">Email Address <span class="ctct-req">*</span></label>
                                    <input type="email" id="enq_email" name="email" class="enq-input" placeholder="rajesh@example.com" value="<?= htmlspecialchars($enq_form['email']) ?>" required autocomplete="email">
                                    <span class="enq-error" id="enq_err_email"></span>
                                </div>
                            </div>

                            <div class="enq-row enq-row--2">
                                <div class="enq-group">
                                    <label class="enq-label" for="enq_company">Company / Business Name</label>
                                    <input type="text" id="enq_company" name="company" class="enq-input" placeholder="Acme Pvt. Ltd." value="<?= htmlspecialchars($enq_form['company']) ?>" autocomplete="organization">
                                </div>
                                <div class="enq-group">
                                    <label class="enq-label" for="enq_location">Location / City</label>
                                    <input type="text" id="enq_location" name="location" class="enq-input" placeholder="Hyderabad, Telangana" value="<?= htmlspecialchars($enq_form['location']) ?>">
                                </div>
                            </div>

                            <!-- SECTION B: Project Details -->
                            <div class="enq-section-label">
                                <span class="enq-section-num">02</span> Project Details
                            </div>

                            <div class="enq-row enq-row--2">
                                <div class="enq-group">
                                    <label class="enq-label" for="enq_project_type">Project Type <span class="ctct-req">*</span></label>
                                    <select id="enq_project_type" name="project_type" class="enq-input enq-select" required>
                                        <option value="" disabled <?= empty($enq_form['project_type']) ? 'selected' : '' ?>>Select project type…</option>
                                        <option value="New Website"              <?= $enq_form['project_type'] === 'New Website'              ? 'selected':'' ?>>New Website</option>
                                        <option value="Website Redesign"         <?= $enq_form['project_type'] === 'Website Redesign'         ? 'selected':'' ?>>Website Redesign</option>
                                        <option value="E-Commerce Store"         <?= $enq_form['project_type'] === 'E-Commerce Store'         ? 'selected':'' ?>>E-Commerce Store</option>
                                        <option value="Web Application"          <?= $enq_form['project_type'] === 'Web Application'          ? 'selected':'' ?>>Web Application</option>
                                        <option value="Mobile App"               <?= $enq_form['project_type'] === 'Mobile App'               ? 'selected':'' ?>>Mobile App</option>
                                        <option value="SEO & Digital Marketing"  <?= $enq_form['project_type'] === 'SEO & Digital Marketing'  ? 'selected':'' ?>>SEO &amp; Digital Marketing</option>
                                        <option value="Graphic Design / Branding"<?= $enq_form['project_type'] === 'Graphic Design / Branding'? 'selected':'' ?>>Graphic Design / Branding</option>
                                        <option value="Website Maintenance"      <?= $enq_form['project_type'] === 'Website Maintenance'      ? 'selected':'' ?>>Website Maintenance</option>
                                        <option value="Other"                    <?= $enq_form['project_type'] === 'Other'                    ? 'selected':'' ?>>Other / Not Sure</option>
                                    </select>
                                    <span class="enq-error" id="enq_err_project_type"></span>
                                </div>
                                <div class="enq-group">
                                    <label class="enq-label" for="enq_existing_url">Existing Website URL</label>
                                    <input type="url" id="enq_existing_url" name="existing_url" class="enq-input" placeholder="https://yourwebsite.com (if any)" value="<?= htmlspecialchars($enq_form['existing_url']) ?>">
                                    <span class="enq-hint">Leave blank if this is a new project.</span>
                                </div>
                            </div>

                            <div class="enq-group">
                                <label class="enq-label">Preferred Technologies</label>
                                <span class="enq-hint enq-hint--block">Select all that apply — or leave blank if you're not sure.</span>
                                <div class="enq-tech-grid">
                                    <?php foreach ($tech_options as $tech): ?>
                                    <label class="enq-tech-item">
                                        <input
                                            type="checkbox"
                                            name="technologies[]"
                                            value="<?= htmlspecialchars($tech) ?>"
                                            <?= in_array($tech, (array)$enq_form['technologies']) ? 'checked' : '' ?>
                                        >
                                        <span><?= htmlspecialchars($tech) ?></span>
                                    </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="enq-row enq-row--2">
                                <div class="enq-group">
                                    <label class="enq-label" for="enq_budget">Approximate Budget</label>
                                    <select id="enq_budget" name="budget" class="enq-input enq-select">
                                        <option value="" disabled <?= empty($enq_form['budget']) ? 'selected' : '' ?>>Select budget range…</option>
                                        <option value="Below ₹15,000"         <?= $enq_form['budget'] === 'Below ₹15,000'         ? 'selected':'' ?>>Below ₹15,000</option>
                                        <option value="₹15,000 – ₹30,000"    <?= $enq_form['budget'] === '₹15,000 – ₹30,000'    ? 'selected':'' ?>>₹15,000 – ₹30,000</option>
                                        <option value="₹30,000 – ₹60,000"    <?= $enq_form['budget'] === '₹30,000 – ₹60,000'    ? 'selected':'' ?>>₹30,000 – ₹60,000</option>
                                        <option value="₹60,000 – ₹1,00,000"  <?= $enq_form['budget'] === '₹60,000 – ₹1,00,000'  ? 'selected':'' ?>>₹60,000 – ₹1,00,000</option>
                                        <option value="Above ₹1,00,000"       <?= $enq_form['budget'] === 'Above ₹1,00,000'       ? 'selected':'' ?>>Above ₹1,00,000</option>
                                        <option value="Not decided yet"       <?= $enq_form['budget'] === 'Not decided yet'       ? 'selected':'' ?>>Not decided yet</option>
                                    </select>
                                </div>
                                <div class="enq-group">
                                    <label class="enq-label" for="enq_timeline">Expected Timeline</label>
                                    <select id="enq_timeline" name="timeline" class="enq-input enq-select">
                                        <option value="" disabled <?= empty($enq_form['timeline']) ? 'selected' : '' ?>>Select timeline…</option>
                                        <option value="As soon as possible"   <?= $enq_form['timeline'] === 'As soon as possible'   ? 'selected':'' ?>>As soon as possible</option>
                                        <option value="Within 2 weeks"        <?= $enq_form['timeline'] === 'Within 2 weeks'        ? 'selected':'' ?>>Within 2 weeks</option>
                                        <option value="Within 1 month"        <?= $enq_form['timeline'] === 'Within 1 month'        ? 'selected':'' ?>>Within 1 month</option>
                                        <option value="1 – 3 months"          <?= $enq_form['timeline'] === '1 – 3 months'          ? 'selected':'' ?>>1 – 3 months</option>
                                        <option value="3 – 6 months"          <?= $enq_form['timeline'] === '3 – 6 months'          ? 'selected':'' ?>>3 – 6 months</option>
                                        <option value="No fixed deadline"      <?= $enq_form['timeline'] === 'No fixed deadline'      ? 'selected':'' ?>>No fixed deadline</option>
                                    </select>
                                </div>
                            </div>

                            <!-- SECTION C: Description -->
                            <div class="enq-section-label">
                                <span class="enq-section-num">03</span> Describe Your Project
                            </div>

                            <div class="enq-group">
                                <label class="enq-label" for="enq_description">Project Description <span class="ctct-req">*</span></label>
                                <textarea id="enq_description" name="description" class="enq-input enq-textarea" rows="6" required minlength="20" placeholder="Describe your project — what it does, who it's for, key features you need, any design references you like, and anything else that will help us understand your vision…"><?= htmlspecialchars($enq_form['description']) ?></textarea>
                                <span class="enq-error" id="enq_err_description"></span>
                                <span class="enq-char-count" id="enqCharCount">0 / 2000</span>
                            </div>

                            <div class="enq-group">
                                <label class="enq-label" for="enq_source">How Did You Find Us?</label>
                                <select id="enq_source" name="source" class="enq-input enq-select">
                                    <option value="" disabled <?= empty($enq_form['source']) ? 'selected' : '' ?>>Select an option…</option>
                                    <option value="Google Search"     <?= $enq_form['source'] === 'Google Search'     ? 'selected':'' ?>>Google Search</option>
                                    <option value="Social Media"      <?= $enq_form['source'] === 'Social Media'      ? 'selected':'' ?>>Social Media</option>
                                    <option value="Word of Mouth"     <?= $enq_form['source'] === 'Word of Mouth'     ? 'selected':'' ?>>Word of Mouth / Referral</option>
                                    <option value="LinkedIn"          <?= $enq_form['source'] === 'LinkedIn'          ? 'selected':'' ?>>LinkedIn</option>
                                    <option value="Previous Client"   <?= $enq_form['source'] === 'Previous Client'   ? 'selected':'' ?>>Returning Client</option>
                                    <option value="Other"             <?= $enq_form['source'] === 'Other'             ? 'selected':'' ?>>Other</option>
                                </select>
                            </div>

                            <button type="submit" class="enq-submit" id="enqSubmitBtn">
                                <span class="enq-submit__label">Submit Enquiry</span>
                                <svg class="enq-submit__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                <svg class="enq-submit__spin" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10" stroke-dasharray="31.4" stroke-dashoffset="10"/></svg>
                            </button>
                            <p class="enq-privacy">We respect your privacy. Your information is never shared with third parties.</p>

                        </form>
                        <?php endif; ?>
                    </div>

                    <!-- ── SIDE PANEL ── -->
                    <div class="enq-side-col" data-aos="fade-left" data-aos-duration="700" data-aos-delay="100">

                        <!-- What Happens Next -->
                        <div class="enq-next-wrap">
                            <h4 class="enq-side-heading">What Happens Next?</h4>
                            <ol class="enq-next-steps">
                                <li class="enq-next-step">
                                    <span class="enq-next-step__num">1</span>
                                    <div>
                                        <strong>We review your enquiry</strong>
                                        <p>Our team reads every submission carefully — usually within a few hours.</p>
                                    </div>
                                </li>
                                <li class="enq-next-step">
                                    <span class="enq-next-step__num">2</span>
                                    <div>
                                        <strong>You receive a tailored quote</strong>
                                        <p>We send a detailed breakdown of scope, timeline and pricing within 24 hours.</p>
                                    </div>
                                </li>
                                <li class="enq-next-step">
                                    <span class="enq-next-step__num">3</span>
                                    <div>
                                        <strong>Free discovery call</strong>
                                        <p>We schedule a quick call to align on requirements before any work begins.</p>
                                    </div>
                                </li>
                                <li class="enq-next-step">
                                    <span class="enq-next-step__num">4</span>
                                    <div>
                                        <strong>Project kickoff</strong>
                                        <p>Once agreed, we start immediately — no long waits, no surprise charges.</p>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <!-- Guarantees -->
                        <div class="enq-guarantee-wrap">
                            <h4 class="enq-side-heading">Our Promises</h4>
                            <ul class="enq-guarantee-list">
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                    Quote within 24 hours — guaranteed
                                </li>
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                    No obligation, completely free
                                </li>
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                    Transparent, itemised pricing
                                </li>
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                    NDA available on request
                                </li>
                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                    Free post-launch support window
                                </li>
                            </ul>
                        </div>

                        <!-- Direct Contact -->
                        <div class="enq-direct-wrap">
                            <h4 class="enq-side-heading">Prefer to Talk Directly?</h4>
                            <a href="https://wa.me/917799971112?text=Hello%2C%20I%27d%20like%20to%20discuss%20a%20project!" class="enq-direct-btn enq-direct-btn--wa" target="_blank" rel="noopener noreferrer">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                                WhatsApp Us
                            </a>
                            <a href="tel:+917799971112" class="enq-direct-btn enq-direct-btn--call">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.16 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92Z"/></svg>
                                +91 77999 71112
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FAQ ===== -->
        <section class="inner-section dsvc-faq-section" style="padding-top:0;">
            <div class="container-90">

                <div class="section-head-center" data-aos="fade-up" data-aos-duration="600">
                    <span class="inner-eyebrow">FAQ</span>
                    <h2 class="inner-title">Enquiry <span>FAQs</span></h2>
                </div>

                <div class="dsvc-faq" data-aos="fade-up" data-aos-duration="600" data-aos-delay="80">

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">How much does a website cost?</button>
                        <div class="faq-a"><p>Pricing depends on the type, scale and features of your project. A basic informational website starts from ₹15,000, while a fully custom web application can be significantly more. Submit your enquiry above and we'll send you an itemised quote within 24 hours. You can also review our <a href="pricing.php">Pricing page</a> for indicative package rates.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">I don't know which technology to choose — can you advise?</button>
                        <div class="faq-a"><p>Absolutely. Technology choice depends on your goals, budget, and long-term plans. During our free discovery call, we'll recommend the best stack for your specific needs — whether that's WordPress for simplicity, Laravel + React for a custom web app, or Flutter for a cross-platform mobile app.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">How long does a typical project take?</button>
                        <div class="faq-a"><p>Timelines vary: a landing page can be live in 5–7 days; a standard business website takes 2–4 weeks; a custom web application or e-commerce store typically takes 4–10 weeks depending on complexity. We always agree on a timeline upfront and stick to it.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">What if I only have a rough idea and no detailed brief?</button>
                        <div class="faq-a"><p>That's perfectly fine — many of our clients come to us with just an idea. Describe what you're trying to achieve in the form above and we'll help shape it into a workable brief during our discovery call. The more context you give, the more accurate the quote, but even a rough idea is enough to get started.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">Do you sign NDAs or confidentiality agreements?</button>
                        <div class="faq-a"><p>Yes — we're happy to sign an NDA before discussing sensitive project details. Just mention it when you enquire and we'll send one across immediately.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">What happens after the project is delivered?</button>
                        <div class="faq-a"><p>Every project includes a free support window after launch to fix any bugs or make minor adjustments. Beyond that, we offer affordable monthly maintenance packages. You also receive full ownership of all source code, design files and assets — no lock-in.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">Can you redesign or improve my existing website?</button>
                        <div class="faq-a"><p>Yes — redesigns are a significant part of our work. Share your existing URL in the form above and describe what you'd like to change or improve. We'll audit the current site and propose targeted improvements or a full redesign depending on your goals.</p></div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <script>
    /* ============================================================
       ENQUIRY FORM — CLIENT-SIDE VALIDATION
       ============================================================ */
    (function () {
        var form    = document.getElementById('enqForm');
        if (!form) return;

        var descEl  = document.getElementById('enq_description');
        var countEl = document.getElementById('enqCharCount');
        var submitBtn = document.getElementById('enqSubmitBtn');

        if (descEl && countEl) {
            descEl.addEventListener('input', function () {
                var len = descEl.value.length;
                countEl.textContent = len + ' / 2000';
                if (len > 1900) countEl.style.color = '#ef4444';
                else countEl.style.color = '';
                if (len > 2000) descEl.value = descEl.value.substring(0, 2000);
            });
        }

        function setErr(id, msg) {
            var el  = document.getElementById('enq_err_' + id);
            var inp = document.getElementById('enq_' + id);
            if (el)  { el.textContent = msg; el.style.display = msg ? 'block' : 'none'; }
            if (inp) { msg ? inp.classList.add('enq-input--err') : inp.classList.remove('enq-input--err'); }
        }

        // Live blur validation
        var nameEl  = document.getElementById('enq_name');
        var emailEl = document.getElementById('enq_email');
        var phoneEl = document.getElementById('enq_phone');
        var typeEl  = document.getElementById('enq_project_type');

        if (nameEl)  nameEl.addEventListener('blur',  function () { setErr('name',  nameEl.value.trim().length < 2 ? 'Please enter your full name.' : ''); });
        if (emailEl) emailEl.addEventListener('blur', function () { setErr('email', !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailEl.value.trim()) ? 'Please enter a valid email.' : ''); });
        if (phoneEl) phoneEl.addEventListener('blur', function () { setErr('phone', phoneEl.value.trim() !== '' && !/^[+]?[\d\s\-().]{7,15}$/.test(phoneEl.value.trim()) ? 'Please enter a valid phone number.' : ''); });
        if (descEl)  descEl.addEventListener('blur',  function () { setErr('description', descEl.value.trim().length < 20 ? 'Please describe your project (min 20 characters).' : ''); });

        form.addEventListener('submit', function (e) {
            var valid = true;

            if (!nameEl  || nameEl.value.trim().length < 2)                                      { setErr('name', 'Please enter your full name.'); valid = false; }
            if (!emailEl || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailEl.value.trim()))            { setErr('email', 'Please enter a valid email address.'); valid = false; }
            if (phoneEl && phoneEl.value.trim() !== '' && !/^[+]?[\d\s\-().]{7,15}$/.test(phoneEl.value.trim())) { setErr('phone', 'Please enter a valid phone number.'); valid = false; }
            if (!typeEl  || typeEl.value === '')                                                   { setErr('project_type', 'Please select a project type.'); valid = false; }
            if (!descEl  || descEl.value.trim().length < 20)                                      { setErr('description', 'Please describe your project (min 20 characters).'); valid = false; }

            if (!valid) {
                e.preventDefault();
                var firstErr = form.querySelector('.enq-input--err');
                if (firstErr) firstErr.scrollIntoView({ behavior: 'smooth', block: 'center' });
                return;
            }

            // GA4 — track enquiry submission as a lead conversion
            if (typeof gtag === 'function') {
                gtag('event', 'generate_lead', {
                    event_category: 'Enquiry Form',
                    event_label: 'enquiry.php'
                });
            }

            if (submitBtn) { submitBtn.classList.add('enq-submit--loading'); submitBtn.disabled = true; }
        });
    })();

    </script>

<?php include 'components/footer.php'; ?>
