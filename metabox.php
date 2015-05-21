<?php
/**
 * Plugin Name: MetaBox
 */

/**
* 
*/
class MetaBox
{
	function init()
	{
		add_action('add_meta_boxes_post', array($this, 'add_meta_boxes'));
		add_action('add_meta_boxes_page', array($this, 'add_meta_boxes'));
	}
}