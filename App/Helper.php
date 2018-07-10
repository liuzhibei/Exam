<?php
function config($file, $key)
{
    $config = \Lzb\Factory::getConfig();
    $keys = explode('.', $key);
    $result = $config[$file];
    foreach ($keys as $k) {
        $result = $result[$k];
    }
    return $result;
}