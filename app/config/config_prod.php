<?php

return array(
'cache' => array (
  'driver' => 'filesystem',
  'namespace' => 'tomahawk_cache:',
  'enabled' => true,
  'directory' => '/var/www/vhosts/tomahawkphp.com/app/config/../storage/cache',
),
'database' => array (
  'default' => 'default2',
  'enabled' => true,
  'fetch' => 8,
  'connections' => 
  array (
    'default2' => 
    array (
      'driver' => 'mysql',
      'host' => 'localhost',
      'port' => '3306',
      'database' => 'test',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix' => '',
    ),
    'laravel' => 
    array (
      'driver' => 'mysql',
      'host' => 'localhost',
      'port' => '3306',
      'database' => 'laravel',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix' => '',
    ),
  ),
),
'doctrine' => array (
  'cache' => 'array',
  'format' => 'xml',
  'proxy_namespace' => 'DoctrineProxies',
  'auto_generate_proxies' => true,
  'proxy_directories' => '/var/www/vhosts/tomahawkphp.com/app/config/../Resources/Doctrine/proxies',
  'mapping_directories' => 
  array (
    0 => '/var/www/vhosts/tomahawkphp.com/app/config/../Resources/Doctrine/mappings',
    1 => '/var/www/vhosts/tomahawkphp.com/src/TomahawkPHP/Bundle/WebBundle/Resources/Doctrine/Mapping',
  ),
  'default_connection' => 'default',
  'connections' => 
  array (
    'default' => 
    array (
      'service' => 'doctrine.connection.default',
      'wrapperClass' => 'Doctrine\\DBAL\\Connections\\MasterSlaveConnection',
      'driver' => 'pdo_mysql',
      'master' => 
      array (
        'host' => 'localhost',
        'port' => '3306',
        'dbname' => 'tomahawk',
        'user' => 'root',
        'password' => '',
      ),
      'slaves' => 
      array (
        0 => 
        array (
          'host' => 'localhost',
          'port' => '3306',
          'dbname' => 'tomahawk',
          'user' => 'root',
          'password' => '',
        ),
      ),
    ),
  ),
),
'error' => array (
  'template_50x' => ':Error:50x.php',
  'template_404' => ':Error:404.php',
),
'kernel' => array (
  'trusted_proxies' => 
  array (
  ),
  'http_method_override' => false,
  'trusted_hosts' => 
  array (
  ),
),
'monolog' => array (
  'path' => '/var/www/vhosts/tomahawkphp.com/app/config/../storage/logs/',
  'name' => 'tomahawk.log',
),
'request' => array (
  'host' => 'www.tomahawkphp.com',
  'asset_host' => '',
  'scheme' => 'http',
  'http_port' => 80,
  'https_port' => 443,
  'ssl' => true,
),
'security' => array (
  'csrf_token_name' => '_csrf_token',
  'key' => 'fJ3PD12u6603aHmg0Ncuc3w1VI3AeiQI',
  'handler' => 'doctrine',
  'handlers' => 
  array (
    'doctrine' => 
    array (
      'model' => 'MyPackage\\Models\\UserDoctrine',
      'username' => 'username',
    ),
    'database' => 
    array (
      'table' => 'users',
      'key' => 'id',
      'username' => 'username',
      'password' => 'password',
      'connection' => 'default',
    ),
    'eloquent' => 
    array (
      'model' => 'MyPackage\\Models\\User',
    ),
  ),
),
'session' => array (
  'driver' => 'file',
  'enabled' => true,
  'session_name' => 'tomahawk_session',
  'directory' => '/var/www/vhosts/tomahawkphp.com/app/config/../storage/sessions',
  'save_path' => '/var/www/vhosts/tomahawkphp.com/app/config/../storage/sessions',
  'cookie_name' => 'tomahawk_cookie',
  'cookie_lifetime' => '',
  'cookie_path' => '/',
  'cookie_domain' => '.standard.devbox.com',
  'cookie_secure' => true,
  'cookie_http_only' => true,
  'table' => 'tomahawk_sessions',
  'id_column' => 'id',
  'data_column' => 'data',
  'date_column' => 'date',
),
'swiftmailer' => array (
  'transport' => 'stmp',
  'host' => 'host.example.com',
  'port' => '25',
  'security' => 'ssl',
  'username' => 'my@email.com',
  'password' => 'password',
),
'templating' => array (
  'cache_dir' => '/var/www/vhosts/tomahawkphp.com/app/config/../storage/template_cache',
),
'translation' => array (
  'locale' => 'fr_DR',
  'fallback_locale' => 'en_GB',
  'translation_dirs' => 
  array (
    0 => '/var/www/vhosts/tomahawkphp.com/app/config/../Resources/Translations',
  ),
  'cache_dir' => '/var/www/vhosts/tomahawkphp.com/app/config/../storage/translation_cache',
),
);