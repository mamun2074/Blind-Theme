<?php

//    blog left sidebar
register_sidebar(array(
    'name' => 'Blog Sidebar',
    'id' => 'blog_sidebar',
    'description' => 'This is blog sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

//Footer sidebar
register_sidebar(array(
    'name' => 'Footer Sidebar',
    'id' => 'footer_sidebar',
    'description' => 'This is footer widget area',
    'before_widget' => '<div class="col-md-3"><div class="footer-widget">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',

));

