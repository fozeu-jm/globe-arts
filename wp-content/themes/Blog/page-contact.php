<?php get_header(); ?>

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url(''); ?>"><i class="fa fa-home"></i> Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- ##### Contact Area Start ##### -->
<section class="contact-area ">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <h4>Get In Touch</h4>
                    <!-- Single Contact Info -->
                    <div class="single-contact-info">
                        <h6>Location:</h6>
                        <h4>750063 Paris-sud </h4>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info">
                        <h6>Email:</h6>
                        <h4>contact@globe-arts.com</h4>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info">
                        <h6>Phone:</h6>
                        <h4>(+33) 456-789-1120</h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="contact-content mb-100">
                    <h4>Contact Form</h4>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <!--                            <form action="#" method="post">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="contact-name" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="contact-phone" placeholder="Phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn nikki-btn mt-15">Submit</button>
                                                    </form>-->
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
</section>
<!-- ##### Contact Area End ##### -->

<?php
get_footer();
?>