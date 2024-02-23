<?php

@unlink(__FILE__);

// Validate if the request is from Softaculous
if($_REQUEST['pass'] != '[[autopass]]'){
	die("Unauthorized Access");
}

require_once('wp-blog-header.php');
require_once('wp-includes/pluggable.php');
require_once('wp-admin/includes/plugin.php');

$plugins_to_activate = '[[plugins_to_activate]]';
$plugins_to_activate = unserialize($plugins_to_activate);

$ret = array();

foreach($plugins_to_activate as $plugn_file){
	// null means success
	$ret[$plugn_file] = activate_plugin($plugn_file);	
}

echo '<plugin_activate>'.serialize($ret).'</plugin_activate>';

exit(0);
