<header>
    <?php get_template_part('includes/nav'); ?>
    <h1><a class="title" href="<?php bloginfo('url'); ?>"><?php $title = get_bloginfo('name');
                                                            echo $title ?><p>旅、本、プログラミング。</p></a></h1>

</header>
<!-- パンくずリスト -->
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>