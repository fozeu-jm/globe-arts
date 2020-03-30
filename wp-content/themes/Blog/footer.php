<!-- ##### Instagram Area Start ##### -->
<div class="follow-us-instagram">
    <div class="instagram-content d-flex flex-wrap align-items-center">

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="<?php echo get_theme_file_uri('img/blog-img/insta1.jpg'); ?>" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="<?php echo get_theme_file_uri('img/blog-img/insta2.jpg'); ?>" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="<?php echo get_theme_file_uri('img/blog-img/insta3.jpg'); ?>" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="<?php echo get_theme_file_uri('img/blog-img/insta4.jpg'); ?>" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="<?php echo get_theme_file_uri('img/blog-img/insta5.jpg'); ?>" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="<?php echo get_theme_file_uri('img/blog-img/insta6.jpg'); ?>" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="<?php echo get_theme_file_uri('img/blog-img/insta7.jpg'); ?>" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>

        <!-- Single Instagram Slide -->
        <div class="single-instagram">
            <img src="<?php echo get_theme_file_uri('img/blog-img/insta8.jpg'); ?>" alt="">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</div>
<!-- ##### Instagram Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Footer Social Info -->
                <div class="footer-social-info d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                    <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                    <a href="#"><i class="fa fa-linkedin"></i><span>linkedin</span></a>
                    <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                    <a href="#"><i class="fa fa-vimeo"></i><span>Vimeo</span></a>
                    <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="copywrite-text">
                    <p>
                        <span style="display: none">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></span>
                        <span style="color: white">Copyright &copy;2019 Tous droits reservé | Obviously powered by <strong>KaizerWebDesign</strong></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
if (isset($_GET['nm']) && $_GET['nm'] == 'confirmed') {
    ?>
    <div class="show" id="snackbar">Merci pour votre souscription</div>
<?php } ?>

<div class="search-overlay ">
    <div class="search-overlay__top">
        <div class="container">
            <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
            <input autofocus="true" id="search-term" type="text" class="search-term" placeholder="Recherche...">
            <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
        </div>
    </div>
    <div class="container">
        <div id="search-overlay__results">
            
        </div>
        
    </div>
</div>


<?php wp_footer() ?>
</body>

</html>