<?php

@unlink(__FILE__);

// Validate if the request is from Softaculous
if($_REQUEST['pass'] != '[[autopass]]'){
	die("Unauthorized Access");
}

require_once('wp-blog-header.php');
require_once('wp-includes/pluggable.php');
require_once('wp-admin/includes/plugin.php');

$plugins_to_deactivate = '[[plugins_to_deactivate]]';
$plugins_to_deactivate = unserialize($plugins_to_deactivate);

$ret = array();

foreach($plugins_to_deactivate as $plugn_file){
	// null means success
	$ret[$plugn_file] = deactivate_plugins($plugn_file);	
}

echo '<plugin_deactivate>'.serialize($ret).'</plugin_deactivate>';

exit(0);
