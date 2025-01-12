<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8995da76ece88cf992be1a997c8bc66c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8995da76ece88cf992be1a997c8bc66c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8995da76ece88cf992be1a997c8bc66c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8995da76ece88cf992be1a997c8bc66c::$classMap;

        }, null, ClassLoader::class);
    }
}
