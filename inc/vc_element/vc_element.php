<?php


/*Latest news vc_element*/

function primium_visual_com()
{

    vc_map(array(
        'base' => 'blind_short',
        'name' => 'Blind Latest News',
        'icon' => get_template_directory_uri() . '/images/latest.png',
        'params' => array(
            array(
                'param_name' => 'title',
                'type' => 'textfield',
                'description' => 'This is latest field area',
                'heading' => 'Title of the lates news',
            ),

        )
    ));

// Blind project
    vc_map(array(
        'base' => 'project',
        'name' => 'Blind Project',
        'icon' => get_template_directory_uri() . '/images/project.png',
        'params' => array(
            array(
                'param_name' => 'title',
                'type' => 'textfield',
                'heading' => 'Project title',
                'description' => 'Write your project name',
            ),
            array(
                'param_name' => 'subtitle',
                'type' => 'textfield',
                'heading' => 'Project sub-title',
                'description' => 'Write your project subtitle here',
            ),
            array(
                'param_name' => 'desc',
                'type' => 'textarea',
                'heading' => 'Project description',
                'description' => 'Write your project description here',
            ),


        ),
    ));


// About us
    vc_map(array(
        'base' => 'blind_about_us',
        'name' => 'Blind About us',
        'icon' => get_template_directory_uri() . '/images/about_us.jpg',
        'params' => array(
            array(
                'param_name' => 'title',
                'type' => 'textfield',
                'heading' => 'Title of the about us',
                'description' => 'Write About us  title here',
            ),
            array(
                'param_name' => 'subtitle',
                'type' => 'textfield',
                'heading' => 'About us subtitle',
                'description' => 'Write subtitle of the about us',
            ),
            array(
                'param_name' => 'desc',
                'type' => 'textfield',
                'heading' => 'Description of about us',
                'description' => 'Write description of the about us',
            ),
            array(
                'param_name' => 'button_text',
                'type' => 'textfield',
                'heading' => 'Button text',
                'description' => 'Write the name of your button',
            ),
            array(
                'param_name' => 'button_link',
                'type' => 'textfield',
                'heading' => 'Button link',
                'description' => 'Write the link of your button',
            ),
            array(
                'param_name' => 'video_link',
                'type' => 'textfield',
                'heading' => 'Video link',
                'description' => 'Write the link of your video like that :http://player.vimeo.com/video/23031622?title=0&amp;byline=0&amp;portrait=0',
            ),
            array(
                'param_name' => 'image',
                'type' => 'attach_image',
                'heading' => 'About us image',
                'description' => 'About us image',
            ),
            array(
                'param_name' => 'image_size',
                'type' => 'textfield',
                'value' => 'thumbnail',
                'heading' => 'Image size',
                'description' => 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)).',
            ),


        ),
    ));

// Customer logo
    vc_map(array(
        'base' => 'customer_logo',
        'name' => 'Blind Customer logo list',
        'description' => 'Customer logo list',
        'icon' => get_template_directory_uri() . '/images/iconlist.png',
        'params' => array(
            array(
                'param_name' => 'title',
                'type' => 'textfield',
                'heading' => 'Title',
                'description' => 'Write your customer logo list title',

            ),
            array(
                'param_name' => 'subtitle',
                'type' => 'textfield',
                'heading' => 'Subtitle',
                'description' => 'Write your customer logo sub-title',
            ),
            array(
                'param_name' => 'desc',
                'type' => 'textarea',
                'heading' => 'Description',
                'description' => 'Write your customer logo description',
            ),
            array(
                'param_name' => 'button_text',
                'type' => 'textfield',
                'heading' => 'Button name',
                'description' => 'Write your customer logo button',
            ),
            array(
                'param_name' => 'button_link',
                'type' => 'textfield',
                'heading' => 'Button link',
                'description' => 'Write your customer logo button link',
            ),
            array(
                'param_name' => 'images_list',
                'type' => 'attach_images',
                'heading' => 'Image gallery',
                'description' => 'Select your customer logo ',
            ),

        ),
    ));

// our team
    vc_map(array(
        'base' => 'blind_our_team',
        'name' => 'Our Blind team',
        'description' => 'You may add your team description',
        'icon' => get_template_directory_uri() . '/images/team.png',
        'params' => array(
            array(
                'param_name' => 'title',
                'type' => 'textfield',
                'description' => 'Write team title hear',
                'heading' => 'Team title'

            ),
            array(
                'param_name' => 'post_perpage',
                'type' => 'textfield',
                'description' => 'How manny items show in this page',
                'heading' => 'Show item',
            ),
            array(
                'param_name' => 'colom',
                'type' => 'dropdown',
                'description' => 'How many colom you want this page',
                'heading' => 'Column layout',
                'value' => array(
                    'Select' => ' ',
                    'Two Column' => 6,
                    'Three Column' => 4,
                    'Four Column' => 3,
                    'Six Column' => 2,
                ),
            ),


        ),
    ));


//Service
    vc_map(array(
        'name' => 'Blind Service',
        'base' => 'service_blind',
        'icon' => get_template_directory_uri() . '/images/service.png',
        'params' => array(
            array(
                'param_name' => 'title',
                'type' => 'textfield',
                'description' => 'Put your service header',
                'heading' => 'Service header',

            ),
            array(
                'param_name' => 'subtitle',
                'type' => 'textfield',
                'description' => 'Put your service subtitle here',
                'heading' => 'Service subtitle',
            ),
            array(
                'param_name' => 'desc',
                'type' => 'textarea',
                'description' => 'Put your service description here',
                'heading' => 'Service description',
            ),
            array(
                'param_name' => 'service_button',
                'type' => 'textfield',
                'description' => 'Put your service button name here',
                'heading' => 'Service Button',
            ),
            array(
                'param_name' => 'button_link',
                'type' => 'textfield',
                'description' => 'Put your service button link here',
                'heading' => 'Service Button link',

            ),

        ),
    ));


}

add_action('vc_before_init','primium_visual_com');

