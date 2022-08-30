<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// CARBON FIELDS

function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('text', 'crb_text', 'Text Field'),
        ));
}

function crb_attach_post_options()
{
    Container::make('post_meta', 'Gallery')
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('media_gallery', 'crb_media_gallery', __('Media Gallery'))
                ->set_type(array('image', 'video'))
                ->set_duplicates_allowed(false),
        ));

    Container::make('post_meta', 'Booking Information')
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('text', 'booking_header', __('Booking Info Header')),
            Field::make('text', 'booking_text_01', __('Booking Info Text')),
            Field::make('text', 'booking_sub_header', __('Booking Info Sub Header')),
            Field::make('text', 'booking_text_02', __('Booking Info Text')),
            Field::make('text', 'booking_url_text', __('Booking URL Text'))
                ->set_width(50),
            Field::make('text', 'booking_url', __('Booking URL'))
                ->set_width(50),
        ));

    Container::make('post_meta', 'Address Information')
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('text', 'address_header', __('Address Header')),
            Field::make('textarea', 'address_text', __('Address Text')),
        ));

    Container::make('post_meta', 'COVID Information')
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('text', 'covid_header', __('COVID Info Header')),
            Field::make('text', 'covid_text', __('COVID Info Text')),
        ));

    Container::make('post_meta', 'Business Hours')
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('text', 'hours_header', __('Hours Header')),
            Field::make('text', 'day_01', __('Hours Day 1'))
                ->set_width(50),
            Field::make('text', 'hours_01', __('Hours 1'))
                ->set_width(50),
            Field::make('text', 'day_02', __('Hours Day 2'))
                ->set_width(50),
            Field::make('text', 'hours_02', __('Hours 2'))
                ->set_width(50),
            Field::make('text', 'day_03', __('Hours Day 3'))
                ->set_width(50),
            Field::make('text', 'hours_03', __('Hours 3'))
                ->set_width(50),
            Field::make('text', 'day_04', __('Hours Day 4'))
                ->set_width(50),
            Field::make('text', 'hours_04', __('Hours 4'))
                ->set_width(50),
        ));
}

function the_field($field)
{
    echo carbon_get_the_post_meta($field);
}

function get_field($field)
{
    return carbon_get_the_post_meta($field);
}

// SCRIPTS AND STYLES

function global_scripts()
{
    wp_enqueue_style('site-styles', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/dd510d8712.js');
}

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

// ACTION!

add_action('after_setup_theme', 'crb_load');

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

add_action('carbon_fields_register_fields', 'crb_attach_post_options');

add_action('get_header', 'remove_admin_login_header');

add_action('wp_enqueue_scripts', 'global_scripts');
