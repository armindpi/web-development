<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/asest/css/bootstrap.min.css');
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/asest/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
register_nav_menus([
    'PM'=>'primary'
]);

// Bd Logo
register_sidebar([
'name'=>'Bd Logo',
'id'=>'bdlogo',
'before_widget'=>'',
'after_widget'=>''
]);

// Hero Top
register_sidebar([
'name'=>'Hero Title',
'id'=>'herotitle',
'before_widget'=>'',
'after_widget'=>''
]);

// card
register_sidebar([
'name'=>'Hero Card 1',
'id'=>'card1',
'before_widget'=>'',
'after_widget'=>''
]);

// photo
register_sidebar([
'name'=>'Photo Line left',
'id'=>'lineleft',
'before_widget'=>'',
'after_widget'=>''
]);
register_sidebar([
'name'=>'Photo Title',
'id'=>'phototitle',
'before_widget'=>'',
'after_widget'=>''
]);
register_sidebar([
'name'=>'Photo Line Right',
'id'=>'lineright',
'before_widget'=>'',
'after_widget'=>''
]);
register_sidebar([
'name'=>'picture 01',
'id'=>'picture1',
'before_widget'=>'',
'after_widget'=>''
]);
register_sidebar([
'name'=>'News Title',
'id'=>'newstitle',
'before_widget'=>'',
'after_widget'=>''
]);




?>