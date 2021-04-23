<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <div id='post'>
        <main>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class='index-post'>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_time('Y-m-d'); ?></p>
                        <p><?php $cat = get_the_category();
                            echo $cat[0]->cat_name; ?></p>
                        <?php
                        if (has_post_thumbnail()) :
                            the_post_thumbnail('thumbnail', 'class=thumbnail');
                        else :
                        ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="No Image" class='thumbnail' />
                        <?php endif; ?>
                        <p>
                            <?php the_content() ?>
                        </p>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </main>
    </div>
</body>

</html>