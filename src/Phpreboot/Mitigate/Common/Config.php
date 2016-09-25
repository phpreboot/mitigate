<?php
namespace Phpreboot\Mitigate\Common;

use Phpreboot\Mitigate\Contract\ConfigInterface;

class Config implements ConfigInterface
{
    protected $config;

    public function __construct()
    {
        $this->config = [];
    }

    public function get($key, $default = Config::DEFAULT_VALUE_EMPTY_STRING)
    {
        if (!isset($this->config[$key])) {
            return $this->getDefault($default);
        }

        return $this->config[$key];
    }

    public function set($key, $value)
    {
        $this->config[$key] = $value;

        return $this;
    }

    public function setAll($configArray)
    {
        if (!is_array($configArray)) {
            return false;
        }

        foreach ($configArray as $key => $value) {
            $this->set($key, $value);
        }
    }

    protected function getDefault($default)
    {
        if ($default === self::DEFAULT_VALUE_EMPTY_STRING) {
            return '';
        } elseif ($default === self::DEFAULT_VALUE_NULL) {
            return null;
        }
    }
}