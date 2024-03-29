<nav class="navbar navbar-expand-sm navbar-light pt-0 pb-0">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="nav-title" href="<?php bloginfo('url'); ?>"><span class="blog_title"><?php $title = get_bloginfo('name');
                                                                                        echo $title ?></span>
            </a>
    <div class="collapse navbar-collapse justify-content-end" id="nav-bar">
        <ul class="navbar-nav mr-0">
            <li class='nav-item'><a class="nav-link" href="/category/programming">プログラミング</a></li>
            <li class='nav-item'><a class="nav-link" href="/category/england">イギリス</a></li>
            <li class='nav-item'><a class="nav-link" href="/category/overseas">海外旅行</a></li>
            <li class='nav-item'><a class="nav-link" href="/category/japan">国内旅行</a></li>
            <li class='nav-item'><a class="nav-link" href="/category/book/">本</a></li>
            <li></li>
        </ul>
    </div>
</nav>

<style>
    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-light .navbar-nav .nav-link {
        color: white;
    }
</style>