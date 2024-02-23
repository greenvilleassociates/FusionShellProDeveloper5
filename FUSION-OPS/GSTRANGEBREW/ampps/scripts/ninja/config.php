<?php return array (
  'app' => 
  array (
    'name' => 'Invoice Ninja',
    'env' => 'production',
    'debug' => false,
    'url' => '[[softurl]]/public',
    'mix_url' => '[[softurl]]/public',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => '[[key]]',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'App\\Providers\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Webpatser\\Countries\\CountriesServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'App\\Providers\\ComposerServiceProvider',
      28 => 'App\\Providers\\MultiDBProvider',
      29 => 'App\\Providers\\ClientPortalServiceProvider',
      30 => 'App\\Providers\\NinjaTranslationServiceProvider',
      31 => 'App\\Providers\\MailCssInlinerServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Countries' => 'Webpatser\\Countries\\CountriesFacade',
      'CustomMessage' => 'App\\Utils\\ClientPortal\\CustomMessage\\CustomMessageFacade',
      'Collector' => 'Turbo124\\Collector\\CollectorFacade',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'user',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
      'user' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'contact' => 
      array (
        'driver' => 'session',
        'provider' => 'contacts',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
      'contacts' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\ClientContact',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
      'contacts' => 
      array (
        'provider' => 'contacts',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'beacon' => 
  array (
    'enabled' => false,
    'endpoint' => 'https://app.lightlogs.com/api',
    'api_key' => '',
    'batch' => true,
    'cache_key' => 'beacon',
    'system_logging' => 
    array (
      0 => 'Turbo124\\Beacon\\Jobs\\System\\CpuMetric',
      1 => 'Turbo124\\Beacon\\Jobs\\System\\HdMetric',
      2 => 'Turbo124\\Beacon\\Jobs\\System\\MemMetric',
      3 => 'App\\Jobs\\Ninja\\CheckDbStatus',
    ),
    'database' => 
    array (
      'mysql' => 
      array (
        'master' => 'master_connection',
        'slave' => 'slave_connection',
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'cluster' => NULL,
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '[[softpath]]/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'invoice_ninja_cache',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => '*',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => 'X-API-COMPANY-KEY,X-API-SECRET,X-API-TOKEN,X-API-PASSWORD,DNT,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type,Range,X-CSRF-TOKEN,X-XSRF-TOKEN,X-LIVEWIRE',
    ),
    'exposed_headers' => 
    array (
      0 => 'X-APP-VERSION,X-MINIMUM-CLIENT-VERSION,X-CSRF-TOKEN,X-XSRF-TOKEN,X-LIVEWIRE',
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'css-inliner' => 
  array (
    'css-files' => 
    array (
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB',
      ),
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => '[[softdb]]',
        'prefix' => '',
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '[[softdbhost]]',
        'port' => '3306',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '[[softdbhost]]',
        'port' => '3306',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
      'db-ninja-01' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
      ),
      'db-ninja-01a' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
      ),
      'db-ninja-02' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
      ),
      'db-ninja-02a' => 
      array (
        'driver' => 'mysql',
        'host' => '[[softdbhost]]',
        'database' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '3306',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
      'sentinel-default' => 
      array (
        0 => 
        array (
          'host' => '127.0.0.1',
          'port' => '6379',
        ),
        'options' => 
        array (
          'replication' => 'sentinel',
          'service' => 'mymaster',
          'sentinel_timeout' => 1.0,
          'parameters' => 
          array (
            'password' => NULL,
            'database' => 0,
          ),
        ),
      ),
      'sentinel-cache' => 
      array (
        0 => 
        array (
          'host' => '127.0.0.1',
          'port' => '6379',
        ),
        'options' => 
        array (
          'replication' => 'sentinel',
          'service' => 'mymaster',
          'sentinel_timeout' => 1.0,
          'parameters' => 
          array (
            'password' => NULL,
            'database' => 1,
          ),
        ),
      ),
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => '%s %s NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'public',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '[[softpath]]/storage/app',
        'permissions' => 
        array (
          'file' => 
          array (
            'public' => 436,
            'private' => 384,
          ),
          'dir' => 
          array (
            'public' => 509,
            'private' => 448,
          ),
        ),
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '[[softpath]]/public/storage',
        'url' => '[[softurl]]/public/storage',
        'visibility' => 'public',
        'permissions' => 
        array (
          'file' => 
          array (
            'public' => 436,
            'private' => 384,
          ),
          'dir' => 
          array (
            'public' => 509,
            'private' => 448,
          ),
        ),
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'visibility' => 'public',
        'endpoint' => NULL,
      ),
      'gcs' => 
      array (
        'driver' => 'gcs',
        'project_id' => 'your-project-id',
        'key_file' => NULL,
        'bucket' => 'your-bucket',
        'path_prefix' => NULL,
        'storage_api_uri' => NULL,
        'visibility' => 'public',
      ),
    ),
    'links' => 
    array (
      '[[softpath]]/public/storage' => '[[softpath]]/storage/app/public',
    ),
  ),
  'former' => 
  array (
    'automatic_label' => true,
    'default_form_type' => 'horizontal',
    'fetch_errors' => true,
    'live_validation' => true,
    'error_messages' => true,
    'push_checkboxes' => false,
    'unchecked_value' => 0,
    'required_class' => 'required',
    'required_text' => '<sup>*</sup>',
    'translate_from' => 'validation.attributes',
    'capitalize_translations' => true,
    'translatable' => 
    array (
      0 => 'help',
      1 => 'inlineHelp',
      2 => 'blockHelp',
      3 => 'placeholder',
      4 => 'data_placeholder',
      5 => 'label',
    ),
    'framework' => 'TwitterBootstrap4',
    'TwitterBootstrap4' => 
    array (
      'viewports' => 
      array (
        'large' => 'lg',
        'medium' => 'md',
        'small' => 'sm',
        'mini' => 'xs',
      ),
      'labelWidths' => 
      array (
        'large' => 2,
        'small' => 4,
      ),
      'icon' => 
      array (
        'tag' => 'i',
        'set' => 'fa',
        'prefix' => 'fa',
      ),
    ),
    'TwitterBootstrap3' => 
    array (
      'viewports' => 
      array (
        'large' => 'lg',
        'medium' => 'md',
        'small' => 'sm',
        'mini' => 'xs',
      ),
      'labelWidths' => 
      array (
        'large' => 2,
        'small' => 4,
      ),
      'icon' => 
      array (
        'tag' => 'span',
        'set' => 'glyphicon',
        'prefix' => 'glyphicon',
      ),
    ),
    'Nude' => 
    array (
      'icon' => 
      array (
        'tag' => 'i',
        'set' => NULL,
        'prefix' => 'icon',
      ),
    ),
    'TwitterBootstrap' => 
    array (
      'icon' => 
      array (
        'tag' => 'i',
        'set' => NULL,
        'prefix' => 'icon',
      ),
    ),
    'ZurbFoundation5' => 
    array (
      'viewports' => 
      array (
        'large' => 'large',
        'medium' => NULL,
        'small' => 'small',
        'mini' => NULL,
      ),
      'labelWidths' => 
      array (
        'small' => 3,
      ),
      'wrappedLabelClasses' => 
      array (
        0 => 'right',
        1 => 'inline',
      ),
      'icon' => 
      array (
        'tag' => 'i',
        'set' => NULL,
        'prefix' => 'fi',
      ),
      'error_classes' => 
      array (
        'class' => 'error',
      ),
    ),
    'ZurbFoundation4' => 
    array (
      'viewports' => 
      array (
        'large' => 'large',
        'medium' => NULL,
        'small' => 'small',
        'mini' => NULL,
      ),
      'labelWidths' => 
      array (
        'small' => 3,
      ),
      'wrappedLabelClasses' => 
      array (
        0 => 'right',
        1 => 'inline',
      ),
      'icon' => 
      array (
        'tag' => 'i',
        'set' => 'general',
        'prefix' => 'foundicon',
      ),
      'error_classes' => 
      array (
        'class' => 'alert-box radius warning',
      ),
    ),
    'ZurbFoundation' => 
    array (
      'viewports' => 
      array (
        'large' => '',
        'medium' => NULL,
        'small' => 'mobile-',
        'mini' => NULL,
      ),
      'labelWidths' => 
      array (
        'large' => 2,
        'small' => 4,
      ),
      'wrappedLabelClasses' => 
      array (
        0 => 'right',
        1 => 'inline',
      ),
      'icon' => 
      array (
        'tag' => 'i',
        'set' => NULL,
        'prefix' => 'fi',
      ),
      'error_classes' => 
      array (
        'class' => 'alert-box alert error',
      ),
    ),
  ),
  'gmail' => 
  array (
    'project_id' => NULL,
    'client_id' => NULL,
    'client_secret' => NULL,
    'redirect_url' => '/',
    'state' => NULL,
    'scopes' => 
    array (
      0 => 'readonly',
      1 => 'modify',
    ),
    'additional_scopes' => 
    array (
    ),
    'access_type' => 'offline',
    'approval_prompt' => 'force',
    'credentials_file_name' => 'gmail-json',
    'allow_multiple_credentials' => false,
    'allow_json_encrypt' => false,
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'l5-swagger' => 
  array (
    'default' => 'default',
    'documentations' => 
    array (
      'default' => 
      array (
        'api' => 
        array (
          'title' => 'L5 Swagger UI',
        ),
        'routes' => 
        array (
          'api' => 'api/documentation',
        ),
        'paths' => 
        array (
          'docs_json' => 'api-docs.json',
          'docs_yaml' => 'api-docs.yaml',
          'annotations' => 
          array (
            0 => '[[softpath]]/app',
          ),
        ),
      ),
    ),
    'defaults' => 
    array (
      'routes' => 
      array (
        'docs' => 'docs',
        'oauth2_callback' => 'api/oauth2-callback',
        'middleware' => 
        array (
          'api' => 
          array (
          ),
          'asset' => 
          array (
          ),
          'docs' => 
          array (
          ),
          'oauth2_callback' => 
          array (
          ),
        ),
        'group_options' => 
        array (
        ),
      ),
      'paths' => 
      array (
        'docs' => '[[softpath]]/storage/api-docs',
        'views' => '[[softpath]]/resources/views/vendor/l5-swagger',
        'base' => NULL,
        'swagger_ui_assets_path' => 'vendor/swagger-api/swagger-ui/dist/',
        'excludes' => 
        array (
        ),
      ),
      'securityDefinitions' => 
      array (
        'securitySchemes' => 
        array (
        ),
        'security' => 
        array (
          0 => 
          array (
          ),
        ),
      ),
      'generate_always' => false,
      'generate_yaml_copy' => false,
      'proxy' => false,
      'additional_config_url' => NULL,
      'operations_sort' => NULL,
      'validator_url' => NULL,
    ),
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Http\\Livewire',
    'view_path' => '[[softpath]]/resources/views/livewire',
    'layout' => 'layouts.app',
    'asset_url' => '[[softurl]]/public',
    'middleware_group' => 'web',
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
    ),
    'manifest_path' => NULL,
    'back_button_cache' => false,
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '[[softpath]]/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '[[softpath]]/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '[[softpath]]/storage/logs/laravel.log',
      ),
      'invoiceninja' => 
      array (
        'driver' => 'single',
        'level' => 'debug',
        'path' => '[[softpath]]/storage/logs/invoiceninja.log',
      ),
      'gelf' => 
      array (
        'driver' => 'custom',
        'via' => 'Hedii\\LaravelGelfLogger\\GelfLoggerFactory',
        'processors' => 
        array (
          0 => 'Hedii\\LaravelGelfLogger\\Processors\\NullStringProcessor',
        ),
        'level' => 'debug',
        'name' => 'my-custom-name',
        'system_name' => NULL,
        'transport' => 'udp',
        'host' => '127.0.0.1',
        'port' => 12201,
        'path' => NULL,
        'max_length' => NULL,
        'context_prefix' => NULL,
        'extra_prefix' => NULL,
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => '[[out_host_server]]',
        'port' => '[[out_m_port]]',
        'encryption' => '[[out_ssl]]',
        'username' => '[[send_email]]',
        'password' => '[[send_email_pwd]]',
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'gmail' => 
      array (
        'transport' => 'gmail',
      ),
      'cocopostmark' => 
      array (
        'transport' => 'cocopostmark',
      ),
    ),
    'from' => 
    array (
      'address' => '[[send_email]]',
      'name' => '[[admin_fname]]',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '[[softpath]]/resources/views/vendor/mail',
      ),
    ),
  ),
  'ninja' => 
  array (
    'web_url' => 'https://www.invoiceninja.com',
    'admin_token' => '',
    'license_url' => 'https://app.invoiceninja.com',
    'production' => false,
    'license' => '',
    'version_url' => 'https://pdf.invoicing.co/api/version',
    'app_name' => 'Invoice Ninja',
    'app_env' => 'production',
    'debug_enabled' => false,
    'require_https' => [[https_enable]],
    'app_url' => '[[softurl]]/public',
    'app_domain' => 'invoicing.co',
    'app_version' => '5.3.22',
    'app_tag' => '5.3.22',
    'minimum_client_version' => '5.0.16',
    'terms_version' => '1.0.1',
    'api_secret' => '',
    'google_maps_api_key' => '',
    'google_analytics_url' => 'https://www.google-analytics.com/collect',
    'key_length' => 64,
    'date_format' => 'Y-m-d',
    'date_time_format' => 'Y-m-d H:i',
    'daily_email_limit' => 300,
    'error_email' => '',
    'mailer' => 'smtp',
    'company_id' => 0,
    'hash_salt' => '',
    'currency_converter_api_key' => '',
    'enabled_modules' => 32767,
    'phantomjs_key' => 'a-demo-key-with-low-quota-per-ip-address',
    'phantomjs_secret' => 'secret',
    'phantomjs_pdf_generation' => true,
    'trusted_proxies' => '',
    'is_docker' => false,
    'local_download' => false,
    'sentry_dsn' => 'https://32f01ea994744fa08a0f688769cef78a@sentry.invoicing.co/9',
    'environment' => 'selfhost',
    'preconfigured_install' => false,
    'update_secret' => 'secret',
    'terms_of_service_url' => 
    array (
      'hosted' => 'https://www.invoiceninja.com/terms/',
      'selfhost' => 'https://www.invoiceninja.com/self-hosting-terms-service/',
    ),
    'privacy_policy_url' => 
    array (
      'hosted' => 'https://www.invoiceninja.com/privacy-policy/',
      'selfhost' => 'https://www.invoiceninja.com/self-hosting-privacy-data-control/',
    ),
    'db' => 
    array (
      'multi_db_enabled' => false,
      'default' => 'mysql',
    ),
    'i18n' => 
    array (
      'timezone_id' => 1,
      'country_id' => 840,
      'currency_id' => 1,
      'language_id' => 1,
      'date_format_id' => '1',
      'datetime_format_id' => '1',
      'locale' => 'en',
      'map_zoom' => 10,
      'payment_terms' => '',
      'military_time' => 0,
      'first_day_of_week' => 0,
      'first_month_of_year' => '2000-01-01',
    ),
    'testvars' => 
    array (
      'username' => 'user@example.com',
      'clientname' => 'client@example.com',
      'password' => 'password',
      'stripe' => '',
      'paypal' => '',
      'authorize' => '',
      'checkout' => '',
      'travis' => false,
      'test_email' => 'test@example.com',
      'wepay' => '',
      'braintree' => '',
      'paytrace' => 
      array (
        'username' => '',
        'password' => '',
        'decrypted' => '',
      ),
      'mollie' => '',
      'square' => '',
    ),
    'contact' => 
    array (
      'email' => '[[send_email]]',
      'from_name' => '[[admin_fname]]',
      'ninja_official_contact' => 'contact@invoiceninja.com',
    ),
    'cached_tables' => 
    array (
      'banks' => 'App\\Models\\Bank',
      'countries' => 'App\\Models\\Country',
      'currencies' => 'App\\Models\\Currency',
      'date_formats' => 'App\\Models\\DateFormat',
      'datetime_formats' => 'App\\Models\\DatetimeFormat',
      'gateways' => 'App\\Models\\Gateway',
      'industries' => 'App\\Models\\Industry',
      'languages' => 'App\\Models\\Language',
      'payment_types' => 'App\\Models\\PaymentType',
      'sizes' => 'App\\Models\\Size',
      'timezones' => 'App\\Models\\Timezone',
    ),
    'notification' => 
    array (
      'slack' => false,
      'mail' => '',
    ),
    'themes' => 
    array (
      'global' => 'ninja2020',
      'portal' => 'ninja2020',
    ),
    'quotas' => 
    array (
      'free' => 
      array (
        'clients' => 50,
        'daily_emails' => 50,
      ),
      'pro' => 
      array (
        'daily_emails' => 100,
      ),
      'enterprise' => 
      array (
        'daily_emails' => 200,
      ),
    ),
    'auth' => 
    array (
      'google' => 
      array (
        'client_id' => '',
        'client_secret' => '',
      ),
    ),
    'system' => 
    array (
      'node_path' => false,
      'npm_path' => false,
    ),
    'designs' => 
    array (
      'base_path' => '[[softpath]]/resources/views/pdf-designs/',
    ),
    'log_pdf_html' => false,
    'expanded_logging' => false,
    'snappdf_chromium_path' => false,
    'snappdf_chromium_arguments' => false,
    'v4_migration_version' => '4.5.35',
    'flutter_renderer' => 'selfhosted-html',
    'webcron_secret' => false,
    'disable_auto_update' => true,
    'invoiceninja_hosted_pdf_generation' => false,
    'ninja_stripe_key' => NULL,
    'wepay' => 
    array (
      'environment' => 'stage',
      'client_id' => '',
      'client_secret' => '',
      'fee_payer' => NULL,
      'fee_cc_multiplier' => NULL,
      'fee_ach_multiplier' => NULL,
      'fee_fixed' => NULL,
    ),
    'ninja_stripe_publishable_key' => NULL,
    'ninja_stripe_client_id' => NULL,
    'ninja_default_company_id' => NULL,
    'ninja_default_company_gateway_id' => NULL,
    'ninja_hosted_secret' => NULL,
    'pdf_generator' => 'phantom',
    'internal_queue_enabled' => true,
  ),
  'postmark' => 
  array (
    'secret' => NULL,
    'guzzle' => 
    array (
      'timeout' => 10,
      'connect_timeout' => 10,
    ),
  ),
  'querydetector' => 
  array (
    'enabled' => false,
    'threshold' => 1,
    'except' => 
    array (
    ),
    'log_channel' => 'daily',
    'output' => 
    array (
      0 => 'BeyondCode\\QueryDetector\\Outputs\\Log',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90000000,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90000000,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'suffix' => NULL,
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90000000,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'self-update' => 
  array (
    'default' => 'github',
    'version_installed' => '5.3.22',
    'repository_types' => 
    array (
      'github' => 
      array (
        'type' => 'github',
        'repository_vendor' => 'invoiceninja',
        'repository_name' => 'invoiceninja',
        'repository_url' => 'https://github.com/',
        'download_path' => '/tmp',
        'private_access_token' => '',
        'use_branch' => '',
      ),
      'http' => 
      array (
        'type' => 'http',
        'repository_url' => '',
        'pkg_filename_format' => 'v_VERSION_',
        'download_path' => '/tmp',
        'private_access_token' => '',
      ),
    ),
    'exclude_folders' => 
    array (
      0 => '__MACOSX',
      1 => 'node_modules',
      2 => 'bootstrap/cache',
      3 => 'bower',
      4 => 'storage/app',
      5 => 'storage/framework',
      6 => 'storage/logs',
      7 => 'storage/self-update',
      8 => 'public/storage',
      9 => 'vendor',
    ),
    'log_events' => true,
    'notifications' => 
    array (
      'notifications' => 
      array (
        'Codedge\\Updater\\Notifications\\Notifications\\UpdateSucceeded' => 
        array (
          0 => 'mail',
        ),
        'Codedge\\Updater\\Notifications\\Notifications\\UpdateFailed' => 
        array (
          0 => 'mail',
        ),
        'Codedge\\Updater\\Notifications\\Notifications\\UpdateAvailable' => 
        array (
          0 => 'mail',
        ),
      ),
      'notifiable' => 'Codedge\\Updater\\Notifications\\Notifiable',
      'mail' => 
      array (
        'to' => 
        array (
          'address' => 'notifications@example.com',
          'name' => '',
        ),
        'from' => 
        array (
          'address' => 'updater@example.com',
          'name' => 'Update',
        ),
      ),
    ),
    'artisan_commands' => 
    array (
      'pre_update' => 
      array (
      ),
      'post_update' => 
      array (
        'postupdate:cleanup' => 
        array (
          'class' => 'App\\Console\\Commands\\PostUpdate',
        ),
      ),
    ),
  ),
  'sentry' => 
  array (
    'dsn' => 'https://32f01ea994744fa08a0f688769cef78a@sentry.invoicing.co/9',
    'environment' => NULL,
    'breadcrumbs' => 
    array (
      'logs' => true,
      'sql_queries' => true,
      'sql_bindings' => true,
      'queue_info' => true,
      'command_info' => true,
    ),
    'tracing' => 
    array (
      'queue_job_transactions' => false,
      'queue_jobs' => true,
      'sql_queries' => true,
      'sql_origin' => true,
      'views' => true,
      'default_integrations' => true,
    ),
    'send_default_pii' => false,
    'traces_sample_rate' => 0.0,
    'controllers_base_namespace' => 'App\\Http\\Controllers',
    'release' => '5.3.22',
  ),
  'services' => 
  array (
    'analytics' => 
    array (
      'tracking_id' => NULL,
    ),
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'gmail' => 
    array (
      'token' => '',
    ),
    'stripe' => 
    array (
      'model' => 'App\\Models\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'github' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'google' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'linkedin' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'twitter' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'bitbucket' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '[[softpath]]/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'invoice_ninja_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '[[softpath]]/resources/views',
    ),
    'compiled' => '[[softpath]]/storage/framework/views',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'inspector' => 
  array (
    'visible_tables' => 
    array (
      0 => '*',
    ),
    'hidden_tables' => 
    array (
    ),
    'hidden_columns' => 
    array (
      'users' => 
      array (
        0 => 'password',
      ),
    ),
    'components' => 
    array (
      'input' => 'InvoiceNinja\\Inspector\\Components\\Input',
      'tables' => 'InvoiceNinja\\Inspector\\Components\\Tables',
      'columns' => 'InvoiceNinja\\Inspector\\Components\\Columns',
      'records' => 'InvoiceNinja\\Inspector\\Components\\Records',
      'record' => 'InvoiceNinja\\Inspector\\Components\\Record',
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => '[[softpath]]/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'webpack' => 'webpack.mix.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'webpack' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
          6 => 'PROVIDER_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => '[[softpath]]/Modules',
      'assets' => '[[softpath]]/public/modules',
      'migration' => '[[softpath]]/database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'routes' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests/Unit',
          'generate' => true,
        ),
        'test-feature' => 
        array (
          'path' => 'Tests/Feature',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
        'component-view' => 
        array (
          'path' => 'Resources/views/components',
          'generate' => false,
        ),
        'component-class' => 
        array (
          'path' => 'View/Component',
          'generate' => false,
        ),
      ),
    ),
    'commands' => 
    array (
      0 => 'CommandMakeCommand',
      1 => 'ControllerMakeCommand',
      2 => 'DisableCommand',
      3 => 'DumpCommand',
      4 => 'EnableCommand',
      5 => 'EventMakeCommand',
      6 => 'JobMakeCommand',
      7 => 'ListenerMakeCommand',
      8 => 'MailMakeCommand',
      9 => 'MiddlewareMakeCommand',
      10 => 'NotificationMakeCommand',
      11 => 'ProviderMakeCommand',
      12 => 'RouteProviderMakeCommand',
      13 => 'InstallCommand',
      14 => 'ListCommand',
      15 => 'ModuleDeleteCommand',
      16 => 'ModuleMakeCommand',
      17 => 'FactoryMakeCommand',
      18 => 'PolicyMakeCommand',
      19 => 'RequestMakeCommand',
      20 => 'RuleMakeCommand',
      21 => 'MigrateCommand',
      22 => 'MigrateRefreshCommand',
      23 => 'MigrateResetCommand',
      24 => 'MigrateRollbackCommand',
      25 => 'MigrateStatusCommand',
      26 => 'MigrationMakeCommand',
      27 => 'ModelMakeCommand',
      28 => 'PublishCommand',
      29 => 'PublishConfigurationCommand',
      30 => 'PublishMigrationCommand',
      31 => 'PublishTranslationCommand',
      32 => 'SeedCommand',
      33 => 'SeedMakeCommand',
      34 => 'SetupCommand',
      35 => 'UnUseCommand',
      36 => 'UpdateCommand',
      37 => 'UseCommand',
      38 => 'ResourceMakeCommand',
      39 => 'TestMakeCommand',
      40 => 'LaravelModulesV6Migrator',
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => '[[softpath]]/vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'nwidart',
      'author' => 
      array (
        'name' => 'Nicolas Widart',
        'email' => 'n.widart@gmail.com',
      ),
    ),
    'composer-output' => false,
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => '[[softpath]]/modules_statuses.json',
        'cache-key' => 'activator.installed',
        'cache-lifetime' => 604800,
      ),
    ),
    'activator' => 'file',
  ),
  'countries' => 
  array (
    'table_name' => 'countries',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
