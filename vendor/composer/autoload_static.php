<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02f41d0eeff3361f00f826640aa8af4b
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'luxury\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'luxury\\' => 
        array (
            0 => __DIR__ . '/..' . '/luxury-watches/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02f41d0eeff3361f00f826640aa8af4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02f41d0eeff3361f00f826640aa8af4b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
