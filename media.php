<?php
$page_title = 'Media — Samsung Zenith';
$page_description = 'The latest Samsung Zenith news, articles, videos and events.';
require_once __DIR__ . '/includes/header.php';

$media_items = get_media_items(3);
$events = get_events();
?>

<!-- ============ HERO ============ -->
<section class="hero hero-compact">
    <div class="hero-media hero-stars"<?= bg_style('assets/img/hero-media.jpg') ?>></div>
    <div class="container hero-content reveal">
        <span class="eyebrow">Newsroom</span>
        <h1>Media</h1>
        <p class="lede">Announcements, stories and coverage from inside Zenith.</p>
    </div>
</section>

<!-- ============ INTRO ============ -->
<section class="section text-center">
    <div class="container reveal">
        <h2>Uncovering Zenith's Innovation, Every Release</h2>
        <p style="max-width:560px; margin:16px auto 32px;">From product launches to behind-the-scenes engineering stories, this is where the Zenith story unfolds.</p>
        <a href="#latest" class="btn btn-primary">Explore</a>
    </div>
</section>

<!-- ============ LATEST STORIES ============ -->
<section class="section section-alt" id="latest">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Latest</span>
            <h2>Latest Stories</h2>
        </div>
        <div class="grid grid-3">
            <?php foreach ($media_items as $item): ?>
            <article class="card media-card reveal">
                <div class="card-media"><?= img_tag($item['thumbnail'] ?? '', h($item['title'])) ?></div>
                <div class="card-body">
                    <span class="tag"><?= h($item['category']) ?></span>
                    <h3><?= h($item['title']) ?></h3>
                    <p><?= h($item['excerpt'] ?? '') ?></p>
                    <time><?= h(date('d M Y', strtotime($item['published_at'] ?? 'now'))) ?></time>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ BRAND GROWTH VIDEO ============ -->
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Watch</span>
            <h2>Brand Growth</h2>
        </div>
        <div class="video-feature reveal"<?= bg_style('assets/img/video-poster.jpg') ?>>
            <div class="play-btn"><?= icon('play') ?></div>
        </div>
    </div>
</section>

<!-- ============ UPCOMING EVENTS ============ -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Calendar</span>
            <h2>Upcoming Events</h2>
        </div>
        <ul class="event-list reveal">
            <?php foreach ($events as $event): ?>
            <li>
                <span><?= h($event['title']) ?> &mdash; <?= h($event['location']) ?></span>
                <span class="event-date"><?= h(date('d M Y', strtotime($event['event_date']))) ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- ============ NEWSLETTER ============ -->
<section class="section text-center">
    <div class="container reveal" style="max-width:480px;">
        <h2>Never Miss An Update</h2>
        <p style="margin:14px 0 28px;">Subscribe for product launches, news and event invites straight to your inbox.</p>
        <form class="newsletter-form" novalidate>
            <input type="email" name="email" placeholder="Your email address" required aria-label="Email address">
            <button type="submit">Subscribe</button>
        </form>
        <p class="form-msg" role="status"></p>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
