<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action( 'wp_enqueue_scripts', 'oceanwp_child_style' );
  function oceanwp_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}

/**
 * Your code goes below.
 */

function torque_hello_world_shortcode( $atts ) {
    $a = shortcode_atts( array(
       'name' => 'world'
    ), $atts );
    return 'Hello ' . $a['name'] . '!';
 }
 add_shortcode( 'helloworld', 'torque_hello_world_shortcode' );



 function getActivityCard( $atts ) {
    return (
        '<a class="activity-card" href="'.$atts['link'].'">
        <div class="activity-background" style="background-image: url(\''.$atts['imgurl'].'\');">
            <div class="activity-overlay">
                <h2 class="activity-title">' .
                $atts['title2'] . 
                '</h2>
                <p class="activity-ageGroup">'. 
                $atts['agegroup'] . 
                '</p>
            </div>
        </div>
        <div class="activity-detailsContainer">
            <p class="activity-weekday">' .
                $atts['weekday'] .
            '<p>
            <p class="activity-time">' . 
                $atts['time'] .
            '<p>
        </div>
    </a>'
    );
 }

 add_shortcode('activityCard','getActivityCard');