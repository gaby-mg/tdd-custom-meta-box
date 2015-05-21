<?php
/**
 * Plugin Name: MetaBox
 */

/**
* 
*/
class MetaBox
{
	static function init()
	{
		add_action('add_meta_boxes_post', array('MetaBox', 'add_meta_boxes'));
		add_action('add_meta_boxes_page', array('MetaBox', 'add_meta_boxes'));
	}
}