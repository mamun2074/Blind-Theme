<?php


function blind_cmb2()
{
    $cmbe_banner = new_cmb2_box(array(
        'id' => 'page_banner',
        'title' => 'Page header banner',
        'object_types' => array('page'),
    ));

    $cmbe_banner->add_field(array(
        'name' => 'Bannar Switch',
        'desc' => 'Page banner switch(Default stitch one)',
        'id' => 'page_banner',
        'type' => 'select',
        'options' => array(
            '1' => 'Default',
            '0' => 'Off',
        ),
    ));


    /*Post slider section*/

    $cmb_post_slider = new_cmb2_box(array(
        'id' => 'post_slider',
        'title' => 'Page Slider Images',
        'object_types' => array('post'),
    ));
    $cmb_post_slider->add_field(array(
        'name' => 'Slider image',
        'desc' => 'Gallery type post',
        'id' => 'post_sliders',
        'type' => 'file_list',
    ));


    /*Video post*/

    $cmb2_video = new_cmb2_box(array(
        'id' => 'video_post',
        'title' => 'Video post',
        'object_types' => array('post'),
    ));

    $cmb2_video->add_field(array(
        'name'          =>'Video post',
        'desc'          =>'Give your video url(Sharable embeded video link like that:https://www.youtube.com/embed/clALk8nrsd0)',
        'id'            =>'post_video',
        'type'          =>'oembed',
    ));


    /*Team designation section*/

    $blind_team=new_cmb2_box(array(
        'id'=>'team_desig',
        'title'=>'Our team',
        'object_types'=>array('blind_our_team'),

    ));
    $blind_team->add_field(array(
        'desc'=>'Give your team designation',
        'name'=>'Team Designation',
        'id'=>'bind_single_team',
        'type'=>'text',
    ));






}

add_action('cmb2_admin_init', 'blind_cmb2');

