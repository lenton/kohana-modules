<?php

namespace Kohana\Modules\Autoloader;

interface AutoloaderInterface
{
    /**
     * Checks for a class file to load. This function should be enabled using
     * spl_autoload_register().
     * 
     * @param string $class_name Class name
     * @return bool Whether a class was loaded
     */
    public function load($class_name);
}