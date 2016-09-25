<?php
namespace Phpreboot\Mitigate\Contract;

/**
 * Interface ConfigInterface
 *
 * ConfigInterface define way to get the config in Mitigate
 */
interface ConfigInterface
{
    const DEFAULT_VALUE_NULL = 'DEFAULT_VALUE_NULL';
    const DEFAULT_VALUE_EMPTY_STRING = 'DEFAULT_VALUE_EMPTY_STRING';

    public function get($key, $default = ConfigInterface::DEFAULT_VALUE_EMPTY_STRING);
    public function set($key, $value);
    public function setAll($configArray);
}