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

function getActivityCard( $atts ) {
        $a = shortcode_atts( [], $atts );
        return (
        '<div class= "activity-card">
            <div class="activity-background">
                <div class="activity-overlay">
                    <h2 class="activity-title">' .
                        $a['title'] . 
                    '</h2>
                    <p class="activity-ageGroup">'. 
                        $a['ageGroup'] . 
                    '</p>
                </div>
            </div>
            <div class="activity-detailsContainer">
                <p class="activity-weekday">' .
                    $a['weekday'] .
                '<p>
                <p class="activity-time">' . 
                    $a['time'] .
                '<p>
            </div>
        </div>'             
        );
     }
    
     add_shortcode('activityCard','getActivityCard');