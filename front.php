<?php

/* -----------------------------------------------------------------
 * Bootstrap
 * -----------------------------------------------------------------
 * PHP Reboot Mitigate heavily depends on third party libraries,
 * mainly Symfony console.
 *
 * To load all third party libraries, we are using composer. Thus,
 * initial loading include composer autoload.
 * -----------------------------------------------------------------
 */
require __DIR__ . '/vendor/autoload.php';

/*
 * -----------------------------------------------------------------
 * Configuration
 * -----------------------------------------------------------------
 * Mitigate need some configuration. These configuration might
 * change Mitigate's behaviour at run time. Mitigate configuration
 * is a plain PHP array, which we can load from config file and
 * pass to the Application constructor.
 * -----------------------------------------------------------------
 */
$config = require __DIR__ . '/app-config.php';

$app = new Phpreboot\Mitigate\Application();
$app->run();