<?php

spl_autoload_register(function($class){

    $prefix = 'TestWork\\';

    $baseDir = __DIR__ . '/../src/';

    $len = strlen($prefix);

    if (strncmp($class, $prefix, $len) !== 0){

        return;
    }

    $relativeClass = substr($class, $len);

    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)){

        require $file;
    }

});