<?php get_header(); ?>

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <div class="a" style="--n: 5;">
                <div class="dot" style="--i: 0;"></div>
                <div class="dot" style="--i: 1;"></div>
                <div class="dot" style="--i: 2;"></div>
                <div class="dot" style="--i: 3;"></div>
                <div class="dot" style="--i: 4;"></div>
            </div>
        </div>
    </div>

    <div class="hero-post-slides owl-carousel">
        <?php
        $custom = new WP_Query(array(
            'posts_per_page' => 3,
        ));
        while ($custom->have_posts()) {
            $custom->the_post();
            $test = wp_get_post_categories(get_the_ID());
            $name = get_cat_name($test[0]);
            ?>
            <!-- Single Hero Post -->
            <div class="single-hero-post d-flex flex-wrap">
                <!-- Post Thumbnail -->
                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(<?php the_field('couverture') ?>);"></div>
                <!-- Post Content -->
                <div class="slide-post-content h-100 d-flex align-items-center">
                    <div class="slide-post-text">
                        <p class="post-date" data-animation="fadeIn" data-delay="100ms"><?php the_time('d M Y'); ?> / <?php echo $name; ?></p>
                        <a href="<?php the_permalink() ?>" class="post-title" data-animation="fadeIn" data-delay="300ms">
                            <h2><?php the_title() ?></h2>
                        </a>
                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">
                            <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">En savoir plus</a>
                    </div>
                    <!-- Page Count -->
                    <div class="page-count"></div>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<section class="blog-content-area section-padding-100">
    <div class="container">

        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">
                    <div class="row">

                        <!-- Featured Post Area -->
                        <div class="col-12">
                            <?php
                            $custom = new WP_Query(array(
                                'posts_per_page' => -1,
                            ));
                            while ($custom->have_posts()) {
                                $custom->the_post();
                                $test = wp_get_post_categories(get_the_ID());
                                $name = get_cat_name($test[0]);
                                if (get_field('featured') == 'oui') {
                                    ?>
                                    <div class="featured-post-area mb-50">
                                        <!-- Thumbnail -->
                                        <div class="post-thumbnail mb-30">
                                            <a href="#"><img src="<?php the_field('couverture') ?>" alt=""></a>
                                        </div>
                                        <!-- Featured Post Content -->
                                        <div class="featured-post-content">
                                            <p class="post-date"><?php the_time('d M Y'); ?> / <?php echo $name; ?></p>
                                            <a href="#" class="post-title">
                                                <h2><?php the_title(); ?></h2>
                                            </a>
                                            <p class="post-excerpt">
                                                <?php the_excerpt(); ?>
                                            </p>
                                        </div>
                                        <!-- Post Meta -->
                                        <div class="post-meta d-flex align-items-center justify-content-between">
                                            <!-- Author Comments -->
                                            <div class="author-comments">
                                                <a href="#"><span>by &nbsp;</span><?php the_author() ?></a>
                                                <a href="#"><?php echo get_comments_number() ?> <span>Commentaires</span></a>
                                            </div>
                                            <!-- Social Info -->
                                            <div class="social-info">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    break;
                                }
                            } wp_reset_postdata();
                            ?>
                        </div>
                        <?php
                        $custom = new WP_Query(array(
                            'posts_per_page' => 6,
                            'orderby' => 'post_date',
                            'order' => 'ASC'
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            $test = wp_get_post_categories(get_the_ID());
                            $name = get_cat_name($test[0]);
                            ?>
                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink() ?>"><img style="height: 233.33px; " src="<?php the_field('couverture') ?>" alt=""></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-date"><?php the_time('d M Y') ?> / <?php echo $name; ?></p>
                                        <a href="<?php the_permalink() ?>" class="post-title">
                                            <h4><?php the_title() ?></h4>
                                        </a>
                                        <p class="post-excerpt">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="post-sidebar-area">

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>A propos de l'Auteur</h6>
                        </div>
                        <!-- Thumbnail -->
                        <div class="about-thumbnail">
                            <img src="<?php echo get_theme_file_uri('img/about.jpg') ?>" alt="">
                        </div>
                        <!-- Content -->
                        <div class="widget-content text-center">
                            <img src="<?php echo get_theme_file_uri('img/core-img/signature.png') ?>" alt="">
                            <p>
                                <?php the_field('custom1') ?>
                            </p>
                        </div>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Subscribe &amp; Follow</h6>
                        </div>
                        <!-- Widget Social Info -->
                        <div class="widget-social-info text-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Articles Récent</h6>
                        </div>
                        <?php
                        $custom = new WP_Query(array(
                            'posts_per_page' => 5,
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post()
                            ?>
                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="<?php the_field('couverture') ?>" alt="blog-arts_couverture">
                                </div>
                                <div class="post-content">
                                    <a href="<?php the_permalink() ?>" class="post-title">
                                        <h6><?php the_title() ?></h6>
                                    </a>
                                    <a href="<?php the_permalink() ?>" class="post-author"><span>by &nbsp;</span> <?php the_author() ?></a>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Adds -->
                        <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Newsletter</h6>
                        </div>
                        <!-- Content -->
                        <div class="newsletter-content">
                            <p><?php the_field('custom2') ?></p>
                            <form id="sub-form" action="http://127.0.0.1/globe-arts/?na=s" method="post">
                                <input type="email" name="ne" value="" size="40" class="form-control" placeholder="Entrez votre email" required="true">
                                <button id="send-btn"><i class="fa fa-send"></i></button>
                            </form>
                            
                        </div>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area mb-30">
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Categories</h6>
                        </div>

                        <ol class="nikki-catagories">
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) {
                                ?>
                                <li><a href="<?php echo get_category_link($category->term_id) ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp; <?php echo $category->name ?></span> <span>(<?php echo $category->count ?>)</span></a></li>
                                                <?php
                                            }
                                            ?>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
