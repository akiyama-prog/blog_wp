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
    <h1>Welcome to my Blog!</h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <article><?php the_content(); ?></article>
        <?php endwhile; ?>
    <?php endif; ?>
</body>

</html>