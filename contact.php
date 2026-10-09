<?php
$page_title = 'Contact — Samsung Zenith';
$page_description = 'Get in touch with the Samsung Zenith team.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ============ BANNER ============ -->
<section class="contact-banner" role="img" aria-label="Contact us"<?= bg_style('assets/img/contact.jpg') ?>></section>

<section class="section text-center">
    <div class="container reveal">
        <span class="eyebrow">Get In Touch</span>
        <h1>Contact Us</h1>
        <p style="max-width:520px; margin:16px auto 0;">Questions about a product, a partnership, or just want to say hello? We'd love to hear from you.</p>
    </div>
</section>

<!-- ============ CONTACT FORM ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="split">
            <div class="reveal">
                <span class="eyebrow">Corporate Headquarters</span>
                <h2>Contact Form</h2>
                <p style="margin-top:14px;">Fill in the form and a member of the Zenith team will get back to you within one business day.</p>
            </div>

            <div class="contact-form-panel reveal">
                <form id="contactForm" novalidate>
                    <div class="form-field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required maxlength="120">
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-field">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" maxlength="180">
                    </div>
                    <div class="form-field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    <p class="form-msg" id="contactFormMsg" role="status"></p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ============ CONTACT INFORMATION ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Reach Us</span>
            <h2>Contact Information</h2>
        </div>
        <div class="grid grid-3">
            <div class="contact-info-item reveal">
                <div class="value-icon"><?= icon('pin') ?></div>
                <h3>Visit Us</h3>
                <p>1 Zenith Way, Cape Town, South Africa</p>
            </div>
            <div class="contact-info-item reveal">
                <div class="value-icon"><?= icon('phone') ?></div>
                <h3>Call Us</h3>
                <p>+27 21 555 0198</p>
            </div>
            <div class="contact-info-item reveal">
                <div class="value-icon"><?= icon('mail') ?></div>
                <h3>Email Us</h3>
                <p>hello@samsungzenith.com</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ FOLLOW US ============ -->
<section class="section section-alt text-center">
    <div class="container reveal">
        <span class="eyebrow">Follow Us</span>
        <h2 style="margin-bottom:24px;">Stay Connected</h2>
        <div class="social-links" style="justify-content:center; display:flex;">
            <a href="#" aria-label="X (Twitter)">𝕏</a>
            <a href="#" aria-label="Facebook">f</a>
            <a href="#" aria-label="Instagram">◎</a>
            <a href="#" aria-label="YouTube">▶</a>
            <a href="#" aria-label="TikTok">♪</a>
        </div>
    </div>
</section>

<!-- ============ FAQ ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">FAQ</span>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div style="max-width:680px; margin:0 auto;">
            <details class="reveal" style="border-bottom:1px solid var(--color-border); padding:18px 0;">
                <summary style="cursor:pointer; font-family:var(--font-heading); font-weight:600;">What's your return policy?</summary>
                <p style="margin-top:12px;">Zenith products can be returned within 30 days of purchase in original condition.</p>
            </details>
            <details class="reveal" style="border-bottom:1px solid var(--color-border); padding:18px 0;">
                <summary style="cursor:pointer; font-family:var(--font-heading); font-weight:600;">Do you offer student discounts?</summary>
                <p style="margin-top:12px;">Yes — verified students receive a discount across the full Zenith range.</p>
            </details>
            <details class="reveal" style="border-bottom:1px solid var(--color-border); padding:18px 0;">
                <summary style="cursor:pointer; font-family:var(--font-heading); font-weight:600;">Where can I find a store near me?</summary>
                <p style="margin-top:12px;">Use the contact form above and our team will point you to your nearest Zenith retailer.</p>
            </details>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
