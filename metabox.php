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

	static function add_meta_boxes($post)
	{
		add_meta_box(
			'externalurldiv',
			'URL Externa',
			array('MetaBox', 'display_external_url_metabox'),
			$post->post_type
		);
	}

	static function display_external_url_metabox()
	{
		wp_nonce_field();
	}
}