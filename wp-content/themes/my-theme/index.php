<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a><br><?php the_excerpt() ?><br><?php the_post_thumbnail(); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php wp_footer(); ?>
</body>

</html>