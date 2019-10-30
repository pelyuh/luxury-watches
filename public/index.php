<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once '../config/init.php';
require_once LIBS . '/functions.php';

new \luxury\App();


\luxury\App::$app->setProperty('test', 'TEST');

debug(\luxury\App::$app->getPropertyes());
