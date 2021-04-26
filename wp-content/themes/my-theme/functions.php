<?php
function init_func()
{
    add_theme_support('post-thumbnails');
}
function widgets_init()
{
    register_sidebar([
        'name' => 'main sidebar',
        'id'   => 'main-sidbar'
    ]);
}
add_action('init', 'init_func');
add_action('widgets_init', 'widgets_init');
