<?php

function add_action($tag, $function_to_add)
{
	global $wp_filter;
	$wp_filter[$tag] = $function_to_add;
}

function add_meta_box($id, $title, $callback, $screen)
{
	global $wp_meta_boxes;
	$wp_meta_boxes[$screen] = $callback;
}

function wp_nonce_field()
{
	echo '<input type="hidden">';
}

function get_post_meta($post_id, $key, $single)
{
	return '';
}

function esc_attr($string)
{	
	return $string;
}