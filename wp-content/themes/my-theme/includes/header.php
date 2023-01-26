    <?php if (wp_is_mobile()) : ?>
        <h1 class="header">
            <a class="title" href="<?php bloginfo('url'); ?>">
                <span class="blog_title"><p>旅好きエンジニア</p><?php echo 'AKlog' ?></span>
            </a>
        </h1>
    <?php else : ?>
        <h1 class="header"><a class="title" href="<?php bloginfo('url'); ?>"><span class="blog_title"><p>旅好きエンジニア</p><?php $title = get_bloginfo('name');
                                                                                        echo $title ?></span>
            </a>
        </h1>
    <?php endif; ?>
