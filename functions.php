<?php

add_theme_support( 'title-tag' );
add_theme_support( 'html5', array(
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );
wp_enqueue_style( 'ubuntu-fonts', '//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700', array( 'cares-style' ), '1.0' );
wp_enqueue_style( 'lekton-fonts', '//fonts.googleapis.com/css?family=Lekton:400,700,400italic', array( 'cares-style' ), '1.0' );
wp_enqueue_style( 'cares-style', get_stylesheet_uri() );


wp_enqueue_script( 'modernizr', get_theme_file_uri( '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js' ), array(), '2.8.3', false );

wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/js/vendor/bootstrap.min.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'classie', get_theme_file_uri( '/js/vendor/classie.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'isotope', get_theme_file_uri( '/js/vendor/isotope.pkgd.min.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'jquery-velocity', get_theme_file_uri( '/js/vendor/jquery.velocity.min.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'jquery-kenburnsy', get_theme_file_uri( '/js/vendor/jquery.kenburnsy.min.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'textslide', get_theme_file_uri( '/js/vendor/textslide.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'imagesloaded', get_theme_file_uri( '/js/vendor/imagesloaded.pkgd.min.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'tabs', get_theme_file_uri( '/js/vendor/tabs.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'owl-carousel', get_theme_file_uri( '/js/vendor/owl.carousel.min.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'jquery-magnific-popup', get_theme_file_uri( '/js/vendor/jquery.magnific-popup.min.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'jquery-social-buttons', get_theme_file_uri( '/js/vendor/jquery.social-buttons.min.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'wow', get_theme_file_uri( '/js/vendor/wow.min.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'pace', get_theme_file_uri( '/js/vendor/pace.min.js'), array('jquery', 'main'), '1.0', true );
wp_enqueue_script( 'main', get_theme_file_uri( '/js/main.js'), array('jquery'), '1.0', true );
wp_enqueue_script( 'ajax', get_theme_file_uri( '/js/ajax.js'), array('jquery'), '1.0', true );
