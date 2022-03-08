<?php


define('ROOT',dirname(__DIR__));
define("APP",ROOT.'/app');
define('CONF', ROOT.'/config');
define('CORE',ROOT.'/vendor/testing/core');
define('LIB',CORE.'/lib');
define('LAYOUT','default');


$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#",'',$app_path);
$app_path = str_replace('/public/','',$app_path);


define("PATH",$app_path);

require_once ROOT.'/vendor/autoload.php';