<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_time('Y-m-d'); ?></p>
            <article><?php the_content(); ?></article>
        <?php endwhile; ?>
    <?php endif; ?>
</body>

</html>