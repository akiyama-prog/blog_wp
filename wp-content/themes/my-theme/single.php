<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="<?php echo get_stylesheet_uri(); ?>">
    <title>あきなのブログ</title>
</head>

<body>
    <?php get_header(); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_time('Y-m-d'); ?></p>
            <article><?php the_content(); ?></article>
        <?php endwhile; ?>
    <?php endif; ?>
</body>

</html>