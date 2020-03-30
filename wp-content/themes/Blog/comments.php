<?php
if (post_password_required()) {
    return;
}
?>

<ol>
    <?php
    $argum = array(
        'walker' => null,
        'max_depth' => '',
        'style' => 'ol',
        'callback' => null,
        'end-callback' => null,
        'type' => 'all',
        'reply_text' => 'Répondre a ce commentaire',
        'page' => '',
        'per_page' => '',
        'avatar_size' => 32,
        'reverse_top_level' => null,
        'reverse_children' => '',
        'format' => 'html5',
        'short_ping' => false,
        'echo' => true
    );
    wp_list_comments($argum)
    ?>
    <!--    
    <li class="single_comment_area">
            <div class="comment-wrapper d-flex">
                 Comment Meta 
                <div class="comment-author">
                    <img src="img/blog-img/9.jpg" alt="">
                </div>
                 Comment Content 
                <div class="comment-content">
                    <span class="comment-date">MAY 10, 2018</span>
                    <h5>Calantha Flower</h5>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi</p>
                    <a href="#">Like</a>
                    <a class="active" href="#">Reply</a>
                </div>
            </div>
            <ol class="children">
                <li class="single_comment_area">
                    <div class="comment-wrapper d-flex">
                         Comment Meta 
                        <div class="comment-author">
                            <img src="img/blog-img/10.jpg" alt="">
                        </div>
                         Comment Content 
                        <div class="comment-content">
                            <span class="comment-date">MAY 18, 2018</span>
                            <h5>Dianna Agron</h5>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi</p>
                            <a href="#">Like</a>
                            <a class="active" href="#">Reply</a>
                        </div>
                    </div>
                </li>
            </ol>
        </li>
        <li class="single_comment_area">
            <div class="comment-wrapper d-flex">
                 Comment Meta 
                <div class="comment-author">
                    <img src="img/blog-img/11.jpg" alt="">
                </div>
                 Comment Content 
                <div class="comment-content">
                    <span class="comment-date">MAY 24, 2018</span>
                    <h5>Chris Hemsworth</h5>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi</p>
                    <a href="#">Like</a>
                    <a class="active" href="#">Reply</a>
                </div>
            </div>
        </li>-->
</ol>

<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) { ?>
    <nav style="margin-top: 50px;" class="comment-navigation" role="navigation">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="post-link-nav">
                    <span class="sunset-icon sunset-chevron-left" aria-hidden="true"></span> 
                    <?php previous_comments_link(esc_html__('<<Plus vieux', 'kaizer')) ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 text-right">
                <div class="post-link-nav">
                    <?php next_comments_link(esc_html__('Plus récents >>', 'kaizer')) ?>
                    <span class="sunset-icon sunset-chevron-right" aria-hidden="true"></span>
                </div>
            </div>
        </div><!-- .row -->
    </nav>
    <?php
}
?>

<?php
/*
  Comments clos verification and instruction
  -----------------------------------------------------------------------------------------------------
 */
if (have_comments()) {
    if (!comments_open() && get_comments_number()) {
        ?>
        <p class="no-comments"> Commentaires fermé pour ce post </p>
        <?php
    }
}
?>

<?php comment_form(); ?>

