<?php

function add_action($tag, $function_to_add)
{
	global $wp_filter;
	$wp_filter[$tag] = $function_to_add;
}