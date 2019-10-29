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
