<?php

/*flicker*/
register_post_type('flicker', array(
    'labels' => array(
        'name' => 'Flicker',
        'add_new' => 'Add new flicker',
        'add_new_item' => 'Add Flicker title',
        'edit_item' => 'Edit Flicker',
        'new_item' => 'Add new Flicker itme',
        'featured_image' => 'Featured Flicker image',
        'set_featured_image' => 'Set feature Flicker image',

    ),
    'menu_icon' => 'dashicons-format-image',
    'description' => 'This is flicker widget photos',
    'public' => true,
    'supports' => array('title', 'thumbnail'),
    'menu_position' => 5,

));

/*Blind service post*/
register_post_type('blind_service', array(
    'public' => true,
    'labels' => array(
        'name' => 'Services',
        'add_new' => 'Add new Services',

    ),
    'supports' => array('title', 'thumbnail', 'editor'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-align-left'
));

/*Blind project*/
register_post_type('blind_project', array(
    'public' => true,
    'labels' => array(
        'name' => 'Project',
        'add_new' => 'Add new Project',
        'add_new_item' => 'Add Project item',
    ),
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-align-right',

));


//   Our team
register_post_type('blind_our_team', array(
    'public' => true,
    'labels' => array(
        'name' => 'Our team',
        'add_new' => 'Add new team',
        'add_new_item' => 'Add new team item',
        'heading' => 'Team'

    ),
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_icon' => 'dashicons-groups',
    'menu_position' => 5,
));

