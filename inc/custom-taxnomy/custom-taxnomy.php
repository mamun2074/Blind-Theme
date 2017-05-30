<?php
function project_texnomoy()
{
    register_taxonomy('project_category', 'blind_project', array(
        'public' => true,
        'labels' => array(
            'menu_name' => 'Categories',
            'name' => 'Project Categroies',
            'add_new_item' => 'Add project categories',

        ),
        'hierarchical' => true,
    ));
}
add_action('init', 'project_texnomoy');


/*Tags in project*/
function project_tag()
{
    $arrs = array(
        'public' => true,
        'labels' => array(
            'name' => 'Tags',
        ),
        'hierarchical' => false,

    );

    register_taxonomy('project_tag', 'blind_project', $arrs);
}
add_action('init', 'project_tag');

