<?php
namespace Core;
require APP_PATH . '/vendor/autoload.php';
require dirname(__DIR__) . '/app/config/constants.php';
echo Route::run();