<?php
require 'functions.php';
require 'metabox.php';

class MetaBoxTest extends PHPUnit_Framework_TestCase
{
	function testHooksAFunctionToTheAddMetaBoxesAction()
	{
		global $wp_filter;  // We could have named it anything else
		MetaBox::init();

		$this->assertSame(
			$wp_filter['add_meta_boxes_post'],
			array('MetaBox', 'add_meta_boxes')
		);
		
		$this->assertSame(
			$wp_filter['add_meta_boxes_page'],
			array('MetaBox', 'add_meta_boxes')
		);
	}

	/**
	 * @dataProvider postTypeProvider
	 */
	function testCallsTheAddMetaBoxFunction($post_type)
	{
		global $wp_meta_boxes;
		$post = new StdClass();
		$post->post_type = $post_type;

		MetaBox::add_meta_boxes($post);

		$this->assertArrayHasKey($post_type, $wp_meta_boxes);	
	}

	function postTypeProvider()
	{
		return array(
			array('post'),
			array('page'),
		);
	}

	function testDisplaysMetaBox()
	{
		$post = new StdClass();
		$metabox = array();

		$this->expectOutputRegex('/<input type="text" name="external_url" class="widefat" value="">/');
		MetaBox::display_external_url_metabox($post, $metabox);	
	}
}