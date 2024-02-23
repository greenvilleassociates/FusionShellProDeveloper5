<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade.php(For individual softwares)
//===========================================================
// SOFTACULOUS 
// Version : 1.0
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

/////////////////////////////////////////
// All functions in this PAGE must begin
// with TWO UNDERSCORE '__' to avoid 
// clashes with SOFTACULOUS Functions
// e.g. __funcname()
/////////////////////////////////////////

//////////////////////////////////////////
// Note : The path of the upgrade package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

// NOTE: $__settings will contain the installation information like PATH, URL. They are :
//       $__settings['ver'] - The version of the current installation
//		 $__settings['itime'] - When the software was installed
//		 $__settings['softpath'] - The current PATH
//		 $__settings['softurl'] - The URL of the software
//		 IF database was made by Softaclous
//		 $__settings['softdb'] - The Database name
//		 $__settings['softdbuser'] - Database User
//		 $__settings['softdbhost'] - Database Host
//		 $__settings['softdbpass'] - Database Password

//The Upgrade process.
function __upgrade($version_from){

global $__settings, $software, $globals, $notes;
	
	sunzip($software['path'].'/update/update.zip', $__settings['softpath'], 1);
	
	@schmod($__settings['softpath'].'/config.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/engine/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/recovery/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/snippets/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/tests/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/themes/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/vendor/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/install/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/logs/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/plugins/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/_sql/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/build/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/var/', $globals['odc'], 1);
	@schmod($__settings['softpath'].'/custom/plugins/', $globals['odc']);
	@schmod($__settings['softpath'].'/var/cache/clear_cache.sh', $globals['efc']);
	@schmod($__settings['softpath'].'/media/vector/', $globals['odc']);
	@schmod($__settings['softpath'].'/files/', $globals['odc']);
	@schmod($__settings['softpath'].'/files/backup/', $globals['odc']);
	//@schmod($__settings['softpath'].'/cache/', $globals['odc'], 1);
	//@schmod($__settings['softpath'].'/templates/', $globals['odc'], 1);
	
	$notes = 'After completing the script upgrade process please apply safe permission to the config file: <b>'.$__settings['softpath'].'/config.php</b> and delete the directory: <b>'.$__settings['softpath'].'/update-assets/</b>';
	
	if(sversion_compare($__settings['ver'], '5.2.1', '<')){
		srm($__settings['softpath'].'/templates/');
		srm($__settings['softpath'].'/cache/');
		srm($__settings['softpath'].'/logs/');
		srm($__settings['softpath'].'/UPGRADE.md');
	}
	
	if(sversion_compare($__settings['ver'], '5.2.10', '<')){
		sunlink($__settings['softpath'].'/.php_cs');
	}
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software, $globals;

	if($globals['os'] == 'windows'){
		$error[] = 'Shopware is not supported on windows.';
	}
	
	return true;
}

?>