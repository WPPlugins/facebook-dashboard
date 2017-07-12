<?php

// Create the function to output the contents of our Dashboard Widget
function jdmfb_widget() {
	echo "<iframe src=\"http://facebookiggadget.appspot.com/\" style=\"border:0;padding:0;margin:0;width:100%;height:300px;overflow:auto;\" frameborder=0 scrolling=auto></iframe>";
} 

// Create the function use in the action hook
function jdmfb_add_widget() {
	wp_add_dashboard_widget('facebook_dashboard', 'Facebook Dashboard', 'jdmfb_widget');	
} 


// Hook into the 'wp_dashboard_setup' action to register our other functions
add_action('wp_dashboard_setup', 'jdmfb_add_widget' );
?>