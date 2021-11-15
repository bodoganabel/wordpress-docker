<?php
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
    
     add_shortcode('activityCard','getActivityCard')
?>