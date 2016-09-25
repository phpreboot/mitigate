<?php
namespace Phpreboot\Mitigate;

use Phpreboot\Mitigate\Common\Config;
use Phpreboot\Mitigate\Contract\ConfigInterface;

class Application {
    protected $config;

    public function __construct($configFilePath = null)
    {
        echo "Constructor loaded" . PHP_EOL;

        // TODO: If config is null, we need to load default config.
        if (!is_null($configFilePath)) {
            $this->loadConfig($configFilePath);
        }

        $this->bootstrap();
    }

    protected function bootstrap()
    {
        echo "Bootstraping" . PHP_EOL;
    }

    protected function loadConfig($configPath)
    {
        if (!file_exists($configPath)) {
            throw new \InvalidArgumentException("Config file do not exists.");
        }

        $config = require $configPath;

        if (!is_array($config)) {
            throw new \InvalidArgumentException("Config file is not valid.");
        }

        $this->config = new Config();
        $this->config->setAll($config);
    }

    public function run()
    {
        echo "executed" . PHP_EOL;
        print_r($this->config);
    }
}