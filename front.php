<?php

/*
 * -----------------------------------------------------------------
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
$configPath = __DIR__ . '/app-config.php';

/*
 * -----------------------------------------------------------------
 * Create and run Application
 * -----------------------------------------------------------------
 * Constructor of Application will do basic bootstraping based on
 * given configuration files.
 *
 * Once basic bootstraping is done, we can simply execute the
 * application by calling `run` method.
 * -----------------------------------------------------------------
 */
$app = new Phpreboot\Mitigate\Application($configPath);
$app->run();