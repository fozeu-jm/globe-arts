<?php get_header(); ?>

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i>Acceuil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Archive</li>
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
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">
                    <div class="row">

                        <!-- Section Heading -->
                        <div class="col-12">
                            <div class="section-heading">
                                <?php
                                if (is_category()) {
                                    ?>
                                <h2><?php single_cat_title() ?></h2>
                                <p>Catégorie : &nbsp; <?php  single_cat_title() ?></p>
                                <?php } 
                                if(is_date()){
                                ?>
                                <h2><?php echo ucfirst(get_the_date('F, Y')) ; ?></h2>
                                <p>Billets de : &nbsp; <?php echo ucfirst(get_the_date('F, Y')) ; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                            <!-- Single Blog Post -->
                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink() ?>"><img src="<?php the_field('couverture') ?>" alt="globe-arts images"></a>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p class="post-date"><?php the_time('F j, Y'); ?> / <?php echo get_the_category_list(', ') ?></p>
                                        <a href="<?php the_title() ?>" class="post-title">
                                            <h4>
                                                <?php the_title() ?>
                                            </h4>
                                        </a>
                                        <p class="post-excerpt">
                                            <?php the_excerpt() ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <?php echo paginate_links(); ?>
            </div>

            <!-- Blog Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="post-sidebar-area">

                    <!-- ##### Single Widget Area ##### -->
                    <!--                    <div class="single-widget-area mb-50">
                                            <form class="search-form" action="#" method="post">
                                                <input type="search" name="search" class="form-control" placeholder="Search...">
                                                <button><i class="fa fa-send"></i></button>
                                            </form>
                                        </div>-->

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
                        <!-- Title -->
                        <div class="widget-title">
                            <h6>Archives Mensuel</h6>
                        </div>
                        <ol class="nikki-archives">
                            <?php
                            $custom = new WP_Query(array(
                                'posts_per_page' => -1
                            ));
                            $tab = array();
                            while ($custom->have_posts()) {
                                $custom->the_post();
                                if (!in_array(get_the_date('F Y'), $tab)) {
                                    ?>
                                    <li><a href="<?php echo get_month_link(get_the_date('Y'), get_the_date('m')); ?> "><?php echo get_the_date('F Y'); ?></a></li>
                                    <?php
                                    array_push($tab, get_the_date('F Y'));
                                }
                            }
                            ?>
                        </ol>
                    </div>

                    <!-- ##### Single Widget Area ##### -->
                    <!--                    <div class="single-widget-area mb-30">
                                             Title 
                                            <div class="widget-title">
                                                <h6>popular tags</h6>
                                            </div>
                                             Tags 
                                            <ol class="popular-tags d-flex flex-wrap">
                                                <li><a href="#">Creative</a></li>
                                                <li><a href="#">Unique</a></li>
                                                <li><a href="#">Template</a></li>
                                                <li><a href="#">Photography</a></li>
                                                <li><a href="#">travel</a></li>
                                                <li><a href="#">lifestyle</a></li>
                                                <li><a href="#">Wordpress Template</a></li>
                                                <li><a href="#">food</a></li>
                                                <li><a href="#">Idea</a></li>
                                            </ol>
                                        </div>-->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Content Area End ##### -->

<?php
get_footer();
?>