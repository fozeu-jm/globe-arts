<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php wp_head(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
            <!-- Navbar Area -->
            <div class="nikki-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container-fluid">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="nikkiNav">

                            <!-- Nav brand -->
                            <a href="<?php echo site_url(); ?>" class="nav-brand"><img src="<?php echo get_theme_file_uri('img/LOGO-2.png') ?>" alt=""></a>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li class="<?php
                                        if (is_front_page()) {
                                            echo 'active';
                                        }
                                        ?>"><a href="<?php echo site_url(); ?>">Accueil</a></li>
                                        <li class="<?php
                                        if (get_post_type() == 'post') {
                                            echo 'active';
                                        }
                                        ?>"><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                                        <li class="<?php
                                                if (is_page('a-propos-de-lauteur') OR is_page('a-propos-du-blog')) {
                                                    echo 'active';
                                                }
                                                ?>"><a href="#">A propos</a>
                                            <ul class="dropdown">
                                                <li class="<?php
                                                if (is_page('a-propos-de-lauteur')) {
                                                    echo 'active';
                                                }
                                                ?>" ><a href="<?php echo site_url('a-propos-de-lauteur'); ?>">Auteur</a></li>
                                                <li class="<?php
                                        if (is_page('a-propos-du-blog')) {
                                            echo 'active';
                                        }
                                                ?>"><a href="<?php echo site_url('a-propos-du-blog'); ?>">Globe-arts</a></li>
                                            </ul>
                                        </li>

                                        <li class="<?php
                                        if (is_page('contact')) {
                                            echo 'active';
                                        }
                                                ?>"><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
                                    </ul>

                                    <!-- Search Form -->
                                    <div class="search-form">
                                        <button id="search-trigger" ><i class="fa fa-search"></i></button>
                                    </div>


                                    <!-- Social Button -->
                                    <div class="top-social-info">
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS Feed"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                    </div>

                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>