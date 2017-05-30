<?php get_header(); ?>


<!--Banner section-->

<section class="page-banner-section">
    <div class="container">
        <h2>Blog</h2>
        <ul class="page-depth">
            <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
        </ul>
    </div>
</section>


<!--Blog section-->
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-box">

                    <?php while (have_posts()):the_post(); ?>
                        <?php get_template_part('/template-parts/content', get_post_format()); ?>
                    <?php endwhile; ?>


                    <ul class="pagination-list">
                        <?php
                        the_posts_pagination(array(
                            'type' => 'list',
                            'screen_reader_text' => ' ',
                            'prev_text' => 'PREV',
                            'next_text' => "Next",
                        ));
                        ?>
                    </ul>

                </div>

            </div>

            <!--Sidebar area-->

            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>


<!--Footer area-->
<?php get_footer(); ?>


