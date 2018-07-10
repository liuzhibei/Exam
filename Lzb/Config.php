<?php
namespace Lzb;


class Config implements \ArrayAccess
{
    protected $configs = array();

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($key)
    {
        if (empty($this->configs[$key])) {
            $file_path = BASE_DIR . '/Configs' . '/' . $key . '.php';
            $config = require $file_path;
            $this->configs[$key] = $config;
        }
        return $this->configs[$key];

    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

}