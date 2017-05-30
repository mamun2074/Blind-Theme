<?php get_header(); ?>

<!--Banner section-->
    <section class="page-banner-section">
        <div class="container">
            <?php while (have_posts()):the_post(); ?>
                <h2><?php the_title(); ?></h2>
            <?php endwhile; ?>
            <ul class="page-depth">
                <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/service')); ?>">Service</a></li>
                <?php while (have_posts()):the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>

<!--Blog section-->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-box">

                        <div class="blog-post single-post">

                            <?php

                            while (have_posts()):the_post(); ?>
                                <ul class="slides">
                                    <li>
                                        <?php the_post_thumbnail(); ?>
                                    </li>
                                </ul>
                                <div class="post-content-text">
                                    <h1><?php the_title(); ?></h1>
                                    <ul class="post-tags">
                                        <li><?php the_time('d M'); ?> ,</li>
                                        <li><a href="#"><?php the_author(); ?></a> ,</li>

                                    </ul>
                                    <p><?php the_content(); ?></p>
                                </div>

                            <?php endwhile; ?>
                        </div>

                        <!--This was comment section area -->
                        <div class="comment-section">
                            <h2><?php comments_popup_link('No comment', 'One comment', '% comments') ?></h2>
                            <?php comments_template('comments.php'); ?>
                        </div>

                    </div>

                </div>

                <!--Sidebar section-->
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<!--Footer section-->
<?php get_footer(); ?>