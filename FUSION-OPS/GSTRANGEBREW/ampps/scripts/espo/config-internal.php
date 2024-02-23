<?php
return [
  'database' => [
    'driver' => 'pdo_mysql',
    'host' => '[[softdbhost]]',
    'port' => '',
    'charset' => 'utf8mb4',
    'dbname' => '[[softdb]]',
    'user' => '[[softdbuser]]',
    'password' => '[[softdbpass]]'
  ],
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'isInstalled' => true,
  'microtimeInternal' => [[microtime]],
  'passwordSalt' => '[[passwordsalt]]',
  'cryptKey' => '[[cryptKey]]',
  'hashSecretKey' => '[[hashSecretKey]]',
  [[defaultPermissions]]
  'actualDatabaseType' => 'mysql',
  'actualDatabaseVersion' => '[[dbser_ver]]'
];
