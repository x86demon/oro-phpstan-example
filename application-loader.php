<?php

$appPath = rtrim(getenv('ORO_APPLICATION_PATH'), '/');
if (empty($appPath)) {
    die('Please, define ENV variable ORO_APPLICATION_PATH with path to installed oro crm application');
}

if (!is_dir($appPath . '/vendor')) {
    die('Please, run composer install for Oro application');
}

$loader = require $appPath . '/vendor/autoload.php';

Oro\Bundle\EntityExtendBundle\Tools\ExtendClassLoadingUtils::registerClassLoader($appPath . '/var/cache/dev');
Oro\Bundle\EntityExtendBundle\Tools\ExtendClassLoadingUtils::setAliases($appPath . '/var/cache/dev');
