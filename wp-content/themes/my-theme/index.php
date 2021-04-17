<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <div id="container">
        <?php get_template_part('includes/header'); ?>
        <?php get_template_part('includes/nav'); ?>
        <div id='posts'>
            <main>
                <!-- 記事一覧 -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class='index-post'>
                            <a href="<?php the_permalink() ?>">
                                <h2><?php the_title() ?></h2>
                                <p><?php $cat = get_the_category();
                                    echo $cat[0]->cat_name; ?></p>
                                <p>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </p>
                                <?php the_excerpt() ?>
                            </a>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php echo paginate_links() ?>
                <?php wp_footer(); ?>
            </main>
            <!-- サイドバー -->
            <aside>
                <div></div>
            </aside>
        </div>

    </div>
</body>

</html>