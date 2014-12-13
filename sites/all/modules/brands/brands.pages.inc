<?php

function brands_page(){
	return theme('brands_display');
}


function brands_admin_page(){
	
	// create empty XML file
	$xml_file = variable_get('brands_xml_file',$_SERVER['DOCUMENT_ROOT'].'/'.file_directory_path().'/brands/brands.xml');
	$xml_obj = @simplexml_load_file($xml_file);
	//$xml_obj->asXML($xml_file);
		
	// error check
	if(!is_object($xml_obj)){
		drupal_set_message('brands: xml file could not be loaded');
		exit();
	}	
	
	// display brands
	
	
	return theme('brands_manage',$xml_obj);
}

function brands_del_confirm_page(){	
	$i = arg(4);
	
	return theme('brands_del_confirm',$i);
}