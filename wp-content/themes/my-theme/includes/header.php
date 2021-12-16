<header>
    <?php get_template_part('includes/nav'); ?>

    <?php if (wp_is_mobile()) : ?>
        <h1>
            <a class="title" href="<?php bloginfo('url'); ?>">
                <span class="blog_title"><?php $title = get_bloginfo('name');
                                            echo $title ?></span>
                <p>旅するプログラマー</p>
            </a>
        </h1>
    <?php else : ?>
        <h1><a class="title" href="<?php bloginfo('url'); ?>"><span class="blog_title"><?php $title = get_bloginfo('name');
                                                                                        echo $title ?></span>
                <p>旅するプログラマー</p>
            </a>
        </h1>
    <?php endif; ?>
</header>
<!-- パンくずリスト -->
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>