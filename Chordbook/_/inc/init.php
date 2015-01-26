<?php
	set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );

	require("_/inc/functions.php");

	//Constants
	define("FROM_EMAIL", "http://anthonyveyssiere.com/Chordbook <webform@http://anthonyveyssiere.com/Chordbook>");
	
	//Setup Variable for tracking VirtualPageViews in analytics.
	$VirtualPageView = "";

	//Variables to store Site/URL information
	$ServerName = $_SERVER['SERVER_NAME'];
	$SiteSection = "";
	$SubSection = "";

	$RequestMethod = $_SERVER['REQUEST_METHOD'];
	$FormErrors = array();

	setSectionInfo();

	//SET SERVER SPECIFIC VARIABLES AND CONSTANTS
	switch ($ServerName) {
		case 'http://localhost':
			define("CONTACT_EMAIL", "");
			define("ANALYTICS_ID", "");
			break;
		
		case 'http://anthonyveyssiere.com/Chordbook':
			define("CONTACT_EMAIL", "");
			define("ANALYTICS_ID", "");
			break;
	}

?>