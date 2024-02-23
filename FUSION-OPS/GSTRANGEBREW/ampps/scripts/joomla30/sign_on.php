<?php

@unlink(__FILE__);

// Validate if the request is from Softaculous
if($_REQUEST['pass'] != '[[autopass]]'){
	die("Unauthorized Access");
}

define('_JEXEC', 1);

if (file_exists(__DIR__ . '/administrator/defines.php'))
{
	include_once __DIR__ . '/administrator/defines.php';
}

if (!defined('_JDEFINES'))
{
	define('JPATH_BASE', realpath(__DIR__ .'/administrator'));
	require_once JPATH_BASE . '/includes/defines.php';
}

require_once JPATH_BASE . '/includes/framework.php';

$version = \Joomla\CMS\Version::MAJOR_VERSION;

$signon_user = '[[signon_username]]';
		
if($version == 4){
	// Boot the DI container
	$container = \Joomla\CMS\Factory::getContainer();

	$container->alias('session.web', 'session.web.administrator')
		->alias('session', 'session.web.administrator')
		->alias('JSession', 'session.web.administrator')
		->alias(\Joomla\CMS\Session\Session::class, 'session.web.administrator')
		->alias(\Joomla\Session\Session::class, 'session.web.administrator')
		->alias(\Joomla\Session\SessionInterface::class, 'session.web.administrator');

	// Instantiate the application.
	$app = $container->get(\Joomla\CMS\Application\AdministratorApplication::class);

	// Set the application as global app
	\Joomla\CMS\Factory::$application = $app;

	$user = \Joomla\CMS\Factory::getUser();

	if(!$user->id){
		
		$authenticate = \Joomla\CMS\Authentication\Authentication::getInstance('authentication');

		$options = array(
			'action' => 'core.login.admin',
			'group' => 'Public Backend',
		);

		$db = \Joomla\CMS\Factory::getDbo();
		
		if(!empty($signon_user) && !preg_match('/^\[\[(.*?)\]\]$/is', $signon_user)){
			$id = (int) Joomla\CMS\User\UserHelper::getUserId($signon_user);
		}else{
			$query = $db->getQuery(true);
			$query->select($db->quoteName('user_id'))
				->from($db->quoteName('#__user_usergroup_map'))
				->where($db->quoteName('group_id') . ' = 8' );
			$db->setQuery($query);
			$users = $db->loadColumn();
			$id = min($users);
		}

		$user = \Joomla\CMS\User\User::getInstance($id);

		$response = new \Joomla\CMS\Authentication\AuthenticationResponse;
		$response->type = 'Joomla';
		$response->status = \Joomla\CMS\Authentication\Authentication::STATUS_SUCCESS;
		$response->email    = $user->email;
		$response->fullname = $user->name;
		$response->username = $user->username;

		$authorisations = $authenticate->authorise($response, $options);
		$denied_states = \Joomla\CMS\Authentication\Authentication::STATUS_EXPIRED | \Joomla\CMS\Authentication\Authentication::STATUS_DENIED;
		$app->triggerEvent('onUserLogin', array((array) $response, $options));
		if ($response->type === 'Cookie')
		{
			$user->set('cookieLogin', true);
		}
		
	}
}elseif($version == 3){
	
	require_once JPATH_BASE . '/includes/helper.php';
	require_once JPATH_BASE . '/includes/subtoolbar.php';

	$app = JFactory::getApplication('administrator');
		
	// Check for a cookie if user is not logged in
	if(JFactory::getUser()->get('guest')){
		
		$options = array('action' => 'core.login.admin');

		$instance = Joomla\CMS\User\User::getInstance();

		$db = JFactory::getDbo();
		
		if(!empty($signon_user) && !preg_match('/^\[\[(.*?)\]\]$/is', $signon_user)){
			$id = (int) Joomla\CMS\User\UserHelper::getUserId($signon_user);
		}else{
			$query = $db->getQuery(true);
			$query->select($db->quoteName('user_id'))
				->from($db->quoteName('#__user_usergroup_map'))
				->where($db->quoteName('group_id') . ' = 8' );
			$db->setQuery($query);
			$users = $db->loadColumn();
			$id = min($users);
		}
		
		if (!$id)
		{
			$app->redirect('administrator/index.php');
			exit();
		}

		$instance->load($id);

		// If the user is blocked, redirect with an error
		if ($instance->block == 1)
		{
			$app->redirect('administrator/index.php');
			exit();
		}

		$result = $instance->authorise($options['action']);

		// Mark the user as logged in
		$instance->guest = 0;

		$session = Joomla\CMS\Factory::getSession();

		// Grab the current session ID
		$oldSessionId = $session->getId();
				
		// Fork the session
		$session->fork();

		$session->set('user', $instance);
				
		// Ensure the new session's metadata is written to the database
		$app->checkSession();

		// Purge the old session
		$query = $db->getQuery(true)
			->delete('#__session')
			->where($db->quoteName('session_id') . ' = ' . $db->quoteBinary($oldSessionId));

		$db->setQuery($query)->execute();

		$instance->setLastVisit();

	}
}

$app->redirect('administrator/index.php');
