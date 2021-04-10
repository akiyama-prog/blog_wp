<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>あきなのブログ</title>
</head>

<body>
    <?php get_header(); ?>
    <h1>Welcome to my Blog!</h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a><br><?php the_excerpt() ?><br><?php the_post_thumbnail(); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</body>

</html>