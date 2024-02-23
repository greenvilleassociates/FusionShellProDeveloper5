<?php
  error_reporting(E_ALL);

  const HTTP_SERVER = '[[protocol]]://[[domhost]]';
  const COOKIE_OPTIONS = [
    'lifetime' => 0,
    'domain' => '[[domhost]]',
    'path' => '[[relativeurl]]/admin',
    'samesite' => 'Lax',
  ];
  const DIR_WS_ADMIN = '[[relativeurl]]/admin/';

  const HTTP_CATALOG_SERVER = '[[protocol]]://[[domhost]]';
  const DIR_WS_CATALOG = '[[relativeurl]]/';

  date_default_timezone_set('America/New_York');

  const DIR_FS_CATALOG = '[[softpath]]/';

  const DIR_FS_DOCUMENT_ROOT = '[[softpath]]/';
  const DIR_FS_ADMIN = '[[softpath]]/admin/';
  const DIR_FS_BACKUP = DIR_FS_ADMIN . 'backups/';

// If you are asked to provide configure.php details,
// before sharing, please remove the data below and
// obfuscate the admin folder and home directory (DIR_FS).
  const DB_SERVER = '[[softdbhost]]';
  const DB_SERVER_USERNAME = '[[softdbuser]]';
  const DB_SERVER_PASSWORD = '[[softdbpass]]';
  const DB_DATABASE = '[[softdb]]';
