<?php

// footer hour working area

class blind_foter_working_widget extends WP_Widget
{
    public function __construct()
    {
        $name_name = array(
            'calss_name' => 'Footer hour text',
            'description' => 'This is Working hour box email',

        );
        parent::__construct('blind_working_footer', "Working Hour", $name_name);
    }

    public function widget($areaa, $working)
    {
        $workingtitle = $working['workin_title'];
        $textarea = $working['textarea'];
        $tel = $working['tel'];
        $emailf = $working['email'];
        $houre = $working['houre'];

        ?>

        <?php echo $areaa['before_widget']; ?>

        <?php echo $areaa['before_title']; ?>

        <div class="info-widget">
            <h2><?php echo $workingtitle; ?></h2>
            <?php $areaa['after_title']; ?>
            <p class="first-par"><?php echo $textarea; ?></p>
            <p><span>Tel: </span> <?php echo $tel; ?></p>
            <p><span>Email: </span> <?php echo $emailf; ?></p>
            <p><span>Working Hours: </span> <?php echo $houre; ?></p>

        </div>
        <?php echo $areaa['after_widget']; ?>

    <?php }

    public function form($working)
    {

        $workingtitle = $working['workin_title'];
        $textarea = $working['textarea'];
        $tel = $working['tel'];
        $emailf = $working['email'];
        $houre = $working['houre'];


        ?>

        <label for="<?php echo $this->get_field_id('title') ?>">Working title</label>
        <input id="<?php echo $this->get_field_id('title'); ?>"
               name="<?php echo $this->get_field_name('workin_title'); ?>" value="<?php echo $workingtitle; ?>"
               type="text" class="widefat">

        <label for="<?php echo $this->get_field_id('text') ?>">Text area</label>

        <textarea class="widefat" id="<?php echo $this->get_field_id('text'); ?>"
                  name="<?php echo $this->get_field_name('textarea'); ?>"><?php echo esc_textarea($textarea); ?></textarea></p>

        <label for="<?php echo $this->get_field_id('tel'); ?>">Tel:</label>
        <input id="<?php echo $this->get_field_id('tel'); ?>" name="<?php echo $this->get_field_name('tel') ?>"
               value="<?php echo $tel; ?>" type="text"
               class="widefat">

        <label for="<?php echo $this->get_field_id('em'); ?>">Email:</label>
        <input id="<?php echo $this->get_field_id('em'); ?>" name="<?php echo $this->get_field_name('email') ?>"
               value="<?php echo $emailf; ?>" type="text"
               class="widefat">

        <label for="<?php echo $this->get_field_id('wor'); ?>">Working houre:</label>
        <input id="<?php echo $this->get_field_id('wor'); ?>" name="<?php echo $this->get_field_name('houre') ?>"
               type="text" value="<?php echo $houre; ?>"
               class="widefat">

        <?php
    }

}

function blind_working_widget()
{
    register_widget('blind_foter_working_widget');
}

add_action('widgets_init', 'blind_working_widget');



/*Flicker widget*/

class flicker extends WP_Widget
{

    function __construct()
    {

        $widget_options = array(
            'description' => 'Flicker image hear',
        );
        parent::__construct('blindflicker', 'Blind Flicker', $widget_options);
    }

    public function widget($args, $instance)
    {
        $title = $instance['title'];

        ?>

        <?php echo $args['before_widget'] ?>
        <?php echo $args['before_title']; ?>

        <?php echo $title; ?>

        <?php echo $args['after_title']; ?>

        <ul class="flickr">

            <?php

            $flickerpost = new WP_Query(array(
                'post_type' => 'flicker',
                'posts_per_page' => 6,
            ));

            while ($flickerpost->have_posts()):$flickerpost->the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>

            <?php endwhile; ?>
        </ul>
        <?php echo $args['after_widget']; ?>

    <?php }

    public function form($instance)
    {

        $title = $instance['title'];

        ?>

        <label for="<?php echo $this->get_field_id('title') ?>">Title flicker</label>
        <input value="<?php echo $title; ?>" name="<?php echo $this->get_field_name('title'); ?>"
               id="<?php echo $this->get_field_id('title'); ?>" class="widefat" type="text">

    <?php }

}



function blind_flicker_widget()
{
    register_widget('flicker');

}
add_action('widgets_init', 'blind_flicker_widget');

