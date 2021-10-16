<?php

class ClassAutoloader
{
    public function __construct() {
        spl_autoload_register(function ($class) {
            $parts = explode('\\', $class);
            include end($parts) . '.php';
        });
    }
}
