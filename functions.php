<?php
	/**
	 * Created by PhpStorm.
	 * User: davinderpal
	 * Date: 16/08/2017
	 * Time: 11:55
	 */
	function realEDU_theme_enqueue_styles(){
		wp_enqueue_style('bootstrap-base', get_template_directory_uri() . "/node_modules/bootstrap/dist/css/bootstrap.css");
		wp_enqueue_style('font-awesome', get_template_directory_uri() . "/node_modules/font-awesome/css/font-awesome.css");

		wp_enqueue_style('stylesheet-default', get_template_directory_uri() . "/style.css");
		wp_enqueue_style('custom-styles', get_template_directory_uri() . "/css/app.css");
	}
	add_action('wp_enqueue_scripts', 'realEDU_theme_enqueue_styles');