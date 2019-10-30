<?php

/* Description constant DEBUG
 * Сonstant DEBUG value 1 - development mode
 * constant DEBUG value 0 - production mode
 */

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/luxury-watches/core');
define("LIBS", ROOT . '/vendor/luxury-watches/core/libraries');
define("CASHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", ROOT . 'default');


$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';
