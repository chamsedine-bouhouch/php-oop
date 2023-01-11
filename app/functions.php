<?php

spl_autoload_register(function ($class_name) {
    $namespace = 'App\\';
    if (strpos($class_name, $namespace) !== 0) {
        return;
    }
    $class = str_replace($namespace, '', $class_name);
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    $path_to_file =  $class;
    if (file_exists($path_to_file)) {
        require_once($path_to_file);
    }
});