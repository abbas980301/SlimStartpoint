<?php
require '../vendor/autoload.php';

spl_autoload_register(function($class_name){
    $base = __DIR__. '/../' .str_replace('\\', '/', $class_name).'.php';
    $path = realpath($base);
    if ($path) {
        require_once $path;
    }
    else {
        $e = new Exception();
        print_r($e->getMessage());
    }
    return class_exists($class_name, false);
}, true);

\app\src\Eloquent::boot();