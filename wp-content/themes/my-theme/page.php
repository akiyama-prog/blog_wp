<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <header>
        <?php get_template_part('includes/nav'); ?>
    </header>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div id='indexPosts'>
                <main>
                    <article class='single-post'>
                        <p>
                            <?php the_content() ?>
                        </p>
                    </article>
                </main>
                <!-- サイドバー -->
                <aside>
                    <?php if (dynamic_sidebar('main-sidbar')) : else : endif; ?>
                </aside>
            </div>
            <?php get_template_part('includes/bread'); ?>
            <?php get_template_part('footer'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</body>

</html>