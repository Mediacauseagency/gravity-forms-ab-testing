<?php
/**
 * Plugin Name: Gravity Forms A/B Testing
 * Plugin URI: http://mediacause.org
 * Description: A simple plugin that allows A/B Testing for Gravity Forms
 * Version: 0.1
 * Author: Media Cause
 * Author URI: http://mediacause.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


add_shortcode('gravity_form_ab', 'gravity_ab');

function gravity_ab($atts){
	$a = shortcode_atts( array(
		'ids' => '',
		'title' => 'false',
		'description' => 'false',
		'ajax' => 'false'
	), $atts);

	$ids = explode(",", $a['ids']);
	$count = count($ids) - 1;
	if($count > 0){
		$rand = mt_rand(0,$count);
		echo do_shortcode('[gravityform id="'. $ids[$rand].'" title="'. $a['title']. '" description="'. $a['description'] .'" ajax="'. $a['ajax'] .'"]');
	}
}
?>