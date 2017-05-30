<?php


// Blind Service

function blind_service($atts)
{

    $service_atts = shortcode_atts(array(
        'title' => 'Here you can find all about our services',
        'subtitle' => 'Best Services',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco.',
        'service_button' => 'Learn More',
        'button_link' => 'http://www.mambd.net',
    ), $atts);

    ?>
    <section class="services-offer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="default-article">
                        <h1><?php echo $service_atts['title']; ?></h1>
                        <span><?php echo $service_atts['subtitle']; ?></span>
                        <p><?php echo $service_atts['desc']; ?></p>
                        <a href="<?php echo $service_atts['button_link']; ?>"><?php echo $service_atts['service_button'] ?></a>
                    </div>
                </div>


                <div class="col-md-9">
                    <div class="services-box-mas iso-call">

                        <?php
                        $value = new WP_Query(array(
                            'post_type' => 'blind_service',
                            'posts_per_page' => 5,
                        ));
                        while ($value->have_posts()):$value->the_post(); ?>

                            <div class="services-project">
                                <div class="services-gal">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="hover-services">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }

add_shortcode('service_blind', 'blind_service');


// latest news

function blind_latestNews_short($atts)
{
    $news = shortcode_atts(array(
        'title' => 'LATEST NEWS',
    ), $atts);


    ?>

    <section class="news-section">
        <div class="container">
            <div class="title-section alt-title">
                <h1><?php echo $news['title']; ?></h1>
            </div>

            <div class="news-box">
                <div class="arrow-box">
                    <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
                    <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                </div>

                <div id="owl-demo" class="owl-carousel">


                    <?php
                    $lates_post = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 5
                    ));

                    while ($lates_post->have_posts()):$lates_post->the_post();
                        ?>

                        <div class="item news-post">
                            <?php the_post_thumbnail(); ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <ul class="post-tags">
                                <li><?php the_time('d M'); ?> ,</li>
                                <li><a href="#"><?php the_author(); ?></a> ,</li>
                                <li><a href="#"><?php the_category(); ?></a></li>
                            </ul>
                            <p><?php echo wp_trim_words(get_the_content(), 22, false) ?></p>
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>

        </div>
    </section>


<?php }

add_shortcode('blind_short', 'blind_latestNews_short');



// Project

function blind_project($atts)
{
    $service = shortcode_atts(array(
        'title' => 'Our - Latest Projects',
        'subtitle' => 'Best Works',
        'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.',
    ), $atts);

    ?>
    <section class="projects-section">
        <div class="container">
            <div class="title-section">
                <h1><?php echo $service['title']; ?></h1>
                <span><?php echo $service['subtitle']; ?></span>
                <p><?php echo $service['desc']; ?></p>
            </div>
        </div>
        <div class="project-box project-home iso-call">

            <?php

            $blind_project = new WP_Query(array(
                'post_type' => 'blind_project',
                'posts_per_page' => 6,
            ));
            while ($blind_project->have_posts()):$blind_project->the_post();
                ?>
                <div class="project-post">
                    <?php the_post_thumbnail(); ?>
                    <div class="hover-box">
                        <div class="inner-hover">
                            <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <span>bulding, house</span>
                            <a href="<?php echo "#"; ?>" class="link"><i class="fa fa-link"></i></a>
                            <a href="<?php the_post_thumbnail_url(); ?>" class="zoom"><i
                                    class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>

            <?Php endwhile; ?>

        </div>
    </section>

<?php }

add_shortcode('project', 'blind_project');


// About us
function blind_about_visual($atts)
{
    $about_us = shortcode_atts(array(
        'title' => 'Here you can know everythink about us',
        'subtitle' => 'About us',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.',
        'button_text' => 'Learn More',
        'button_link' => 'http://www.mambd.net',
        'video_link' => 'http://player.vimeo.com/video/23031622?title=0&amp;byline=0&amp;portrait=0',
        'image' => get_template_directory_uri() . '/upload/others/4.jpg',
        'image_size' => 'thumbnail',
    ), $atts);
    ?>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="default-article">
                        <h1><?php echo $about_us['title']; ?></h1>
                        <span><?php echo $about_us['subtitle']; ?></span>
                        <p><?php echo $about_us['desc']; ?></p>
                        <a href="<?php echo $about_us['button_link']; ?>"><?php echo $about_us['button_text']; ?></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- Vimeo -->
                    <iframe class="videoembed"
                            src="<?php echo $about_us['video_link']; ?>"
                            frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    <!-- End Vimeo -->
                </div>
                <div class="col-md-4">
                    <?php

                    echo wp_get_attachment_image($about_us['image'], $about_us['image_size']); ?>
                </div>
            </div>
        </div>
    </section>
<?php }

add_shortcode('blind_about_us', 'blind_about_visual');


// Customar logo list
function blind_customar_logo($atts)
{

    $blind_gallery = shortcode_atts(array(
        'title' => 'Here are our Customer logo list',
        'subtitle' => 'Our Clients',
        'desc' => 'There are some of our partners and customers, who are very satisfied with our work. Do you want to be next one?',
        'button_text' => 'Contact us',
        'button_link' => 'http://www.mambd.net',
        'images_list' => get_template_directory_uri() . '/images//clients/client1.png',
    ), $atts);

    ?>

    <section class="clients-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="client-list">
                        <?php

                        $image_galllery = explode(',', $blind_gallery['images_list']);

                        foreach ($image_galllery as $kk) {
                            ?>

                            <li>
                                <a href="">
                                    <?php echo wp_get_attachment_image($kk); ?>
                                </a>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="default-article left-align">
                        <h1><?php echo $blind_gallery['title']; ?></h1>
                        <span><?php echo $blind_gallery['subtitle']; ?></span>
                        <p><?php echo $blind_gallery['desc']; ?></p>
                        <a href="<?php echo $blind_gallery['button_link']; ?>"><?php echo $blind_gallery['button_text']; ?></a>
                    </div>
                </div>
            </div>

        </div>
    </section>


<?php }
add_shortcode('customer_logo', 'blind_customar_logo');


/*shortcode in our team area*/
function blind_ourtem_short($atts)
{

    $blind_team_short = shortcode_atts(array(
        'title' => 'Our Team',
        'post_perpage' => 6,
        'colom' => 3,
    ), $atts);

    ?>

    <section class="team-section">
        <div class="container">
            <div class="title-section alt-title">
                <h1><?php echo $blind_team_short['title']; ?></h1>
            </div>
            <div class="row">
                <?php
                $blind_team_object = new WP_Query(array(
                    'post_type' => 'blind_our_team',
                    'posts_per_page' => $blind_team_short['post_perpage'],
                ));

                while ($blind_team_object->have_posts()):$blind_team_object->the_post(); ?>
                    <div class="col-md-<?php echo $blind_team_short['colom']; ?>">
                        <div class="team-post custom_image_cliant">
                            <?php the_post_thumbnail(); ?>
                            <h2><?php the_title(); ?></h2>
                            <span><?php echo get_post_meta(get_the_ID(), 'bind_single_team', true); ?></span>
                            <p><?php echo wp_trim_words(get_the_content(), 30, false) ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

<?php }

add_shortcode('blind_our_team', 'blind_ourtem_short');



