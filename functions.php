<?php

/*
 * Blind basic function
 *
 */

function blind_basic()
{
    load_theme_textdomain('blind', '/languages');
    add_theme_support('title-tag');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');

    add_theme_support('post-formats', array(
        'video',
        'aside',
        'gallery',
        'chat',
        'link',
        'images',
        'audio'
    ));

    register_nav_menus(array(
        'main_menu' => 'Main Menu',
    ));

    /*Register post type include*/

    include_once 'inc/custom-post/custom-post.php';

    /*Categoies in blind project include*/

    include_once 'inc/custom-taxnomy/custom-taxnomy.php';

//    sidebar area

    include_once 'inc/register-sidebar/register-sidebar.php';

}
add_action('after_setup_theme', 'blind_basic');

/*
 * Blind enqueue script
 *
 */

function blind_script()
{

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('awesome', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
    wp_enqueue_style('bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
    wp_enqueue_style('magnific', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('theme', get_template_directory_uri() . '/css/owl.theme.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');

    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('stylesheet', get_stylesheet_uri());


// script

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', array('jquery'), true, true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), true, true);
    wp_enqueue_script('retina', get_template_directory_uri() . '/js/retina-1.1.0.min.js', array('jquery'), true, true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins-scroll.js', array('jquery'), true, true);
    wp_enqueue_script('scriptaaa', get_template_directory_uri() . '/js/script.js', array('jquery'), true, true);
    wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), true, true);
    wp_enqueue_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), true, true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), true, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array('jquery'), true, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), true, true);

}

add_action('wp_enqueue_scripts', 'blind_script');

// walker menu include

include_once 'class-walker-nav-menu.php';

/*
 * widget development include
 */

include_once 'inc/custom-widget/custom-widget.php';


// comment function

function blind_comment($comment1, $comment2)
{
    ?>

    <ul class="comment-tree">
        <li>
            <div class="comment-box">
                <?php

                echo get_avatar('mamun120520@gmail.com');
                ?>
                <div class="comment-content">
                    <h4><?php comment_author(); ?></h4>
                    <span> <?php echo get_comment_date(); ?>.<?php echo get_comment_time(); ?></span>
                    <p>
                        <?php comment_text(); ?>
                    </p>
                </div>
            </div>
        </li>
    </ul>

<?php }

/*cmb2 metabox developing including file*/
include_once 'inc/cmb2/init.php';
include_once 'inc/cmb2/blindMetabox.php';

/*Tgm file include this section*/
include_once 'inc/tgm/class-tgm-plugin-activation.php';
include_once 'inc/tgm/blind.php';

// Shortcode incude
include_once 'inc/custom-shortcode/custom-shortcode.php';

// include vc element

include_once 'inc/vc_element/vc_element.php';


/*Redux framwork */

include_once 'inc/redux-framework/redux-framework.php';

include_once 'inc/redux-framework/sample/sample-config.php';












