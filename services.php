<?php

/*Template Name:Service*/

get_header(); ?>

<!--Banner section-->

<section class="page-banner-section">
    <div class="container">
        <h2>Services</h2>
        <ul class="page-depth">
            <li><a href="<?php bloginfo('home'); ?>">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/service')); ?>">Services</a></li>
        </ul>
    </div>
</section>

<!--Body section-->

<section class="services-page-section">
    <div class="container">
        <div class="services-wrapp">
            <div class="row">
                <?php
                $psot_service=new WP_Query(array(
                        'post_type' =>'blind_service',
                        'posts_per_page'    =>6,
                ));

                while ($psot_service->have_posts()):$psot_service->the_post(); ?>
                    <div class="col-md-4">
                        <div class="services-post">
                            <?php the_post_thumbnail(); ?>
                            <h2><?php the_title();  ?></h2>
                            <p><?php echo wp_trim_words(get_the_content(),40,false )?></p>
                            <a href="<?php the_permalink();?>">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>


<!--Footer Section-->

<?php get_footer(); ?>

