<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png">
    <!-- Primary Meta Tags -->
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="title" content="Gents by Genna">
    <meta name="description" content="">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.gentsbygenna.com/">
    <meta property="og:title" content="Gents by Genna">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/gbgThumb.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.gentsbygenna.com/">
    <meta property="twitter:title" content="Gents by Genna">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/images/gbgThumb.png">
    <?php wp_head(); ?>
</head>

<?php $booking_url = get_field('booking_url'); ?>

<body>
    <header>
        <h1>
            Gents <span class="amp">by</span> Genna
        </h1>
        <h3>mens clipper-cut specialist serving Brownsburg for over 7 years</h3>
    </header>

    <div class="socials">
        <a href="https://www.instagram.com/gentsbygenna/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div>