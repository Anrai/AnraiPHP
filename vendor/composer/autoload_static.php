<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b1af44735206805492b6e302820d1c4
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
    );

    public static $classMap = array (
        'BaseController' => __DIR__ . '/../..' . '/app/Controllers/BaseController.php',
        'HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b1af44735206805492b6e302820d1c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b1af44735206805492b6e302820d1c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b1af44735206805492b6e302820d1c4::$classMap;

        }, null, ClassLoader::class);
    }
}
