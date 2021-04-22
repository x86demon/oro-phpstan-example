<?php

$appPath = rtrim(getenv('ORO_APPLICATION_PATH'), '/');
if (empty($appPath)) {
    die('Please, define ENV variable ORO_APPLICATION_PATH with path to installed oro crm application');
}

if (!is_dir($appPath . '/vendor')) {
    die('Please, run composer install for Oro application');
}

$loader = require $appPath . '/vendor/autoload.php';
require $appPath . '/src/AppKernel.php';
$kernel = new AppKernel('dev', false);
$kernel->boot();
