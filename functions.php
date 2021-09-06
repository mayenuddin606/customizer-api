<?php 

function basictheme_support(){
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'basictheme_support');



/*Customizer API*/
function custom_api($obj_api){

	//===================General Option===============
	$obj_api -> add_section('genaral-section', array(
		'title' => 'Genaral Option',
		'priority' => 10,
	));

	//image upload=============
	$obj_api -> add_setting('logo-uploader', array(
		'default' => '', 
		'transport' => 'refresh',
	));
	$obj_api -> add_control(new WP_Customize_Image_Control($obj_api, 'logo-uploader', array(
			'section' => 'genaral-section',
			'label' => 'Upload your image',
			'settings' => 'logo-uploader',
		)));

	//edit copyright text========
	$obj_api -> add_setting('copyright-text', array(
		'default' => 'Masum', 
		'transport' => 'postMessage',
	));
	$obj_api -> add_control('copyright-text', array(
		'section' => 'genaral-section',
		'label' => 'Copyright text',
		'type' => 'text',
	));



	//=================Color option==============
	$obj_api -> add_section('all-color', array(
		'title' => 'Color Option',
		'priority' => 15,
	));

	//copyright text color===========
	$obj_api -> add_setting('copyright-color', array(
		'default' => '#ddd',
		'transport' => 'postMessage',
	));
	$obj_api -> add_control(new WP_Customize_Color_Control($obj_api, 'copyright-color', array(
		'section' => 'all-color',
		'label' => 'Change Copyright Color',
		'settings' => 'copyright-color',
	)));


	//=====================Visibility option===================
	$obj_api -> add_section('visibility-option', array(
		'title' => 'Visibility Option',
		'priority' => 16,
	));


	//show copyright text==========
	$obj_api -> add_setting('copyright-show', array(
		'defaule' => true,
		'transport' => 'postMessage',
	));
	$obj_api -> add_control('copyright-show', array(
		'section' => 'visibility-option',
		'label' => 'Show copyright text',
		'type' => 'checkbox',
	));

	//select heroine==========
	$obj_api -> add_setting('select-heroine', array(
		'defaule' => 'kajol',
		'transport' => 'postMessage',
	));
	$obj_api -> add_control('select-heroine', array(
		'section' => 'visibility-option',
		'label' => 'Select Your Heroine',
		'type' => 'select',
		'choices' => array(
			'Kajol' => 'kajol',
			'Rakul' => 'rakul',
			'Katrina' => 'katrina',
			'Madhuri' => 'madhuri',
		)
	));

}
add_action('customize_register', 'custom_api');





function scripts_for_customizer(){
	wp_enqueue_script('customizer-script', get_template_directory_uri().'/js/customizer-script.js', array('jquery', 'customize-preview'), ('1.0.0'), true);

}
add_action('customize_preview_init', 'scripts_for_customizer');


function inline_style(){
?>
	<style type="text/css">
		h2.copyright-text{
			color: <?php echo get_theme_mod('copyright-color'); ?>;
		}
	</style>

<?php
}
add_action('wp_head', 'inline_style');
