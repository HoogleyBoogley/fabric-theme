<?php
require_once('elements/bs4navwalker.php');

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array(
                                    'aside',
                                    'chat',
                                    'gallery',
                                    'link',
                                    'image',
                                    'quote',
                                    'status',
                                    'video'
                                ));

// Navigation
register_nav_menus(array(
    'primary' => __('Primary Navigation')
), 'Top navigation bar.');


// Widget locations
function widgetsInit () {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="card"><div class="card-block">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="card-title">',
		'after_title'   => '</h4>'
    ));
}

add_action('widgets_init', 'widgetsInit');

// Excerpts
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Continue reading...</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );