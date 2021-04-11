<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <title>あきなのブログ</title>
</head>

<body>
    <?php get_header(); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a><br><?php the_excerpt() ?><br><?php the_post_thumbnail(); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</body>

</html>