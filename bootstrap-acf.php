<?php
/*
Plugin Name: Bootstrap for Advanced Custom Fields
Plugin URI: https://github.com/kalenjohnson/wp-acf-bootstrap
Description: This set's up Flexible Content and Repeaters for Bootstrap specific layouts
Version: 0.0.1
Author: Kalen Johnson
Author URI: http://kalenjohnson.com/
License: MIT
Copyright: Kalen Johnson
*/

class Bootstrap_ACF_Sections {

	var $views,
		$count;


	function bootstrap_sections()
	{
		if ( have_rows( 'sections' ) )
		{
			while ( have_rows( 'sections' ) )
			{
				the_row();

				if ( get_row_layout() == 'carousel' )
				{
					$this->slides = get_sub_field( 'slides' );
					if ( ! empty( $this->slides ) )
					{
						include $this->views . 'carousel.php';
					}
				}
				elseif ( get_row_layout() == 'accordion' && have_rows( 'accordion_section' ) )
				{
					include $this->views . 'accordion.php';
				}
				elseif ( get_row_layout() == 'tabs' && have_rows( 'tab_section' ) )
				{
					include $this->views . 'tabs.php';
				}

				$this->count++;

			}
		}
	}

	function __construct()
	{
		$this->views = dirname(__FILE__) . '/views/';
		$this->count = 0;

		if ( class_exists('acf_pro') || function_exists( 'acf_register_flexible_content_field' ) )
		{
			$this->add_action( 'bootstrap-acf', array( $this, 'bootstrap_sections' ) );
		}
	}

	function add_action( $tag, $function_to_add, $priority = 10, $accepted_args = 1 )
	{
		if ( is_callable( $function_to_add ) )
		{
			add_action( $tag, $function_to_add, $priority, $accepted_args );
		}
	}

}

new Bootstrap_ACF_Sections;