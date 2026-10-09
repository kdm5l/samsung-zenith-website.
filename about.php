<?php
$page_title = 'About — Samsung Zenith';
$page_description = 'The story, mission and values behind Samsung Zenith.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ============ HERO ============ -->
<section class="hero hero-compact">
    <div class="hero-media hero-stars"<?= bg_style('assets/img/about.jpg') ?>></div>
    <div class="container hero-content reveal">
        <span class="eyebrow">Our Story</span>
        <h1>About Zenith</h1>
        <p class="lede">Where premium engineering meets purposeful design.</p>
    </div>
</section>

<!-- ============ OUR STORY ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Our Story</span>
            <h2>Built For Those Who Push Forward</h2>
            <p>
                Samsung Zenith was created for a generation that refuses to choose between form and function.
                From dorm rooms to design studios to boardrooms, our products are engineered to keep pace with
                ambitious people &mdash; students building their future, professionals leading their industries,
                and creatives pushing ideas into the world. Every Zenith device is shaped by a single principle:
                premium technology should never feel like a compromise.
            </p>
        </div>
    </div>
</section>

<!-- ============ FOR STUDENTS / FOR PROFESSIONALS ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="audience-grid">
            <div class="audience-card reveal">
                <h3>For Students</h3>
                <p>Lightweight power that keeps up with lectures, late-night deadlines and everything in between.</p>
            </div>
            <div class="audience-card reveal">
                <h3>For Professionals</h3>
                <p>Uncompromising performance and a design language that belongs in every meeting room.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ CORE VALUES ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">What Drives Us</span>
            <h2>Our Core Values</h2>
        </div>

        <div class="grid grid-3 value-grid">
            <div class="value-item reveal">
                <div class="value-icon"><?= icon('innovation') ?></div>
                <h3>Innovation</h3>
                <p>We chase what's next, not what's expected.</p>
            </div>
            <div class="value-item reveal">
                <div class="value-icon"><?= icon('quality') ?></div>
                <h3>Premium Design</h3>
                <p>Every detail is deliberate, from material to motion.</p>
            </div>
            <div class="value-item reveal">
                <div class="value-icon"><?= icon('trust') ?></div>
                <h3>Performance</h3>
                <p>Reliable power, every time you need it.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ CTA ============ -->
<section class="section section-alt text-center">
    <div class="container reveal">
        <h2>Ready To Experience Zenith?</h2>
        <p style="max-width:480px; margin:14px auto 32px;">Discover the full collection and find the device built for how you work, learn and create.</p>
        <a href="products.php" class="btn btn-primary">Explore Products</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
