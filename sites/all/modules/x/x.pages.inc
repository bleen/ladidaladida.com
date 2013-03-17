<?php

function x_contact_page(){
	$output  = "<p>Call us at 856-222-1778 or send us a message by filling out the form below.</p>";
	$output .= drupal_get_form('_x_contactform');	
	return $output;
}