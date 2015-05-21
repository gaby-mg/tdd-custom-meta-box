<?php
require 'functions.php';
require 'metabox.php';

class MetaBoxTest extends PHPUnit_Framework_TestCase
{
	function testHooksAFunctionToTheAddMetaBoxesAction()
	{
		global $wp_filter;  // We could have named it anything else
		$meta_box = new MetaBox();
		$meta_box->init();

		$this->assertSame(
			$wp_filter['add_meta_boxes_post'],
			array($meta_box, 'add_meta_boxes')
		);
		
		$this->assertSame(
			$wp_filter['add_meta_boxes_page'],
			array($meta_box, 'add_meta_boxes')
		);
	}
}