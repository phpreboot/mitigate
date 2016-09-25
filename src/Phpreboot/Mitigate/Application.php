<?php
namespace Phpreboot\Mitigate;

use Phpreboot\Mitigate\Contract\ConfigInterface;

class Application {
    protected $config;

    public function __construct($configFilePath)
    {
        echo "Constructor loaded" . PHP_EOL;
    }

    public function run()
    {
        echo "executed" . PHP_EOL;
    }
}