<?php

spl_autoload_register(function($class)
{
    $dirs = array(
        __DIR__ . '/../src/',
        __DIR__ . '/../tests/'
    );
    if (0 === strpos($class, 'Diffbot\\')) {
        foreach ($dirs as $dir) {
            $file = $dir . str_replace('\\', '/', $class) . '.php';
            if (file_exists($file)) {
                require_once $file;
                return true;
            }
        }
    }
});