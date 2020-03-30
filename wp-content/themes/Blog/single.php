<?php
get_header();
while (have_posts()) {
    the_post();
    ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i>Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12">

                    <!-- Post Details Area -->
                    <div class="single-post-details-area">
                        <div class="post-content">

                            <div class="text-center mb-50">
                                <p class="post-date"><?php the_time('F j, Y'); ?></p>
                                <h2 class="post-title"><?php the_title(); ?></h2>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <a href="#"><span>by</span> <?php the_author(); ?></a>
                                    <a href="#"><?php echo get_comments_number() ?> <span>Commentaires</span></a>
                                </div>
                            </div>

                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <img src="<?php the_field('couverture'); ?>" alt="">
                            </div>

                            <!-- Post Text -->
                            <div class="post-text">
                                <!-- Share -->
                                <div class="post-share">
                                    <span>Share</span>
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>

                                <?php the_content(); ?>

                                <!-- Related Post Area -->
                                <div class="related-posts clearfix">
                                    <!-- Headline -->
                                    <h4 class="headline">Dans la meme catégorie <?php
                                        $test = wp_get_post_categories(get_the_ID());
                                        $name = get_cat_name($test[0]);
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'category_name' => $name,
                                            'posts_per_page' => 2,
                                        );
                                        $custom = new WP_Query($args);
                                        ?></h4>

                                    <div class="row">
                                        <?php
                                        while ($custom->have_posts()) {
                                            $custom->the_post();
                                            ?>
                                            <!-- Single Blog Post -->
                                            <div class="col-12 col-lg-6">
                                                <div class="single-blog-post mb-50">
                                                    <!-- Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <a href="#"><img src="<?php the_field('couverture'); ?>" alt=""></a>
                                                    </div>
                                                    <!-- Content -->
                                                    <div class="post-content">
                                                        <p class="post-date"><?php the_time('F j, Y'); ?></p>
                                                        <a href="<?php the_permalink(); ?>" class="post-title">
                                                            <h4><?php the_title() ?></h4>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } 
                                        wp_reset_postdata();
                                        ?>

                                    </div>
                                </div>

                                <!-- Comment Area Start -->
                                <div class="comment_area clearfix">
                                    <h4 class="headline"><?php echo get_comments_number() ?> Commentaires</h4>                                   
                                    <?php
                                    if (comments_open()) {
                                        comments_template();
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

    <?php
}
get_footer();
?>
