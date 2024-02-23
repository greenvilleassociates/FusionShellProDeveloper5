<?php

//////////////////////////////////////////////////////////////
//===========================================================
// clone.php
//===========================================================
// SOFTACULOUS 
// Version : 4.2.8
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

//The Install process
function __clone(){

global $__settings, $error, $software, $globals, $replace_data, $source_data;
	
	//Do we meet the Minimum software requirements
	__requirements();
	
	if(!empty($error)){
		return false;
	}
	
	$temp = parse_url($source_data['softurl']);
	$source_data['relativeurl'] = $temp['path'];
	
	// database.php
	$file = sfile($__settings['softpath'].'/system/tastyigniter/config/database.php');
	
	if(empty($file)){
		$error[] = 'Could not read the config file to get dbprefix.';
		return false;
	}
	
	soft_preg_replace('/\$db\[("|\')default("|\')\]\[("|\')dbprefix("|\')\](\s*?)=(\s*?)("|\')(.*?)("|\');/is', $file, $__settings['dbprefix'], 8);
	
	sclone_replace($replace_data, $__settings['softpath'].'/system/tastyigniter/config/database.php', true);
	
	//sql
	$query = "TRUNCATE TABLE ".$__settings['dbprefix']."customers_online;";
	sdb_query($query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
	
	if(sfile_exists($__settings['softpath'].'/.htaccess')){
	
		// If the installation is on root domain we need to change the below relative URL
		if(is_dom_root($source_data['softpath'])){
			$replace_data['RewriteBase \'/\''] = 'RewriteBase \''.$__settings['relativeurl'].'\'';
			$replace_data['RewriteBase /'] = 'RewriteBase '.$__settings['relativeurl'];
		}elseif(is_dom_root($__settings['softpath'])){
			$replace_data['RewriteBase \''.$source_data['relativeurl'].'\''] = 'RewriteBase \'/\'';
			$replace_data['RewriteBase '.$source_data['relativeurl']] = 'RewriteBase /';
		}
		
		sclone_replace($replace_data, $__settings['softpath'].'/.htaccess', true);		
	}
	
	//CHMOD
	@schmod($__settings['softpath'].'/system/tastyigniter/session/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/system/tastyigniter/logs/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/assets/downloads/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/assets/images/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/admin/cache/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/main/cache/', $globals['odc'], 1);	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;
	
	return true;

}

?>