<?php get_header(); ?>

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url(''); ?>"><i class="fa fa-home"></i> Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->
<div class="about-us-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2><?php the_title() ?></h2>
                        <p>Bienvenue sur Globe-Arts</p>
                    </div>
                    <div class="row">
                       
                    </div>

                    <div class="about-text">
                        <?php
                        while (have_posts()) {
                            the_post();
                            the_content();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>

