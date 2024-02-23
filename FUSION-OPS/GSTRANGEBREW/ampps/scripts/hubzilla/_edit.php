<?php

//////////////////////////////////////////////////////////////
//===========================================================
// edit.php(For individual softwares)
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

//The Edit process
function __edit($installation){

global $__settings, $globals, $setupcontinue, $software, $error;


	$__settings['admin_email'] = optPOST('admin_email');
	$__settings['admin_pass'] = optPOST('admin_pass');

	// Do we need to reset the password ?
	if(!empty($__settings['admin_pass'])){

		// We need the username
		if(empty($__settings['admin_email'])){
			$error[] = '{{err_no_email}}';
			return false;
		}
		
		// This is to get dbprefix from import.php
		sp_include_once($software['path'].'/import.php');

		$r = call_user_func('__import_'.$software['softname'], $installation['softpath']);
		
		$__settings['softdbhost'] = $r['softdbhost'];
		$__settings['softdbuser'] = $r['softdbuser'];
		$__settings['softdbpass'] = $r['softdbpass'];
		$__settings['softdb'] = $r['softdb'];

		if(!empty($error)){
			return false;
		}

		$query = "SELECT `account_id`, `account_salt`  FROM `account` WHERE `account_email` = '".$__settings['admin_email']."';";

		// Does this user exist ?
		$result = sdb_query($query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);

		$userid = $result[0]['account_id'];

		if(empty($userid)){
			$error[] = '{{err_no_such_email}}';
			return false;			
		}else{
			
			$__settings['salt'] = $result[0]['account_salt'];
			
			//encrypting password using whirpool hash algorithm of hash() function as  defined by script. since this is a curl call 
			$__settings['admin_pass'] = hash('whirlpool', $__settings['salt'] . $__settings['admin_pass']);
			
			if(!empty($error)){
				return false;
			}

			// Update the password now
			$update_query = "UPDATE `account` SET `account_password` = '".$__settings['admin_pass']."' WHERE `account_id` = '".$userid."';";
			$result = sdb_query($update_query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);

		}
	}
}

?>