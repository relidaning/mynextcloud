<?php
 $CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\OC\Memcache\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocxqo9ftbmq4',
  'passwordsalt' => 'ntGYRul3p4hKMrWmFjhbZh5fLSmJ7/',
  'secret' => 'w8U/xSiE0PpWxFVhu7LviYshnXcjyoBw0gpF86a1mylkVdKK',
  'trusted_domains' =>
  array (
    0 => 'localhost:8080',
    1 => '49.233.10.187',
    2 => '192.168.255.0/24',
    3 => '172.20.0.0/24',
    4 => '192.168.1.0/24',
    5 => '192.168.1.*',
    6 => '192.168.255.*'
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '31.0.4.1',
  'overwrite.cli.url' => 'http://localhost:8080',
  'installed' => true,
);
