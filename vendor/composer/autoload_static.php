<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2ac3efed9b8a08b13c44a12f1d8b223
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Asset\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Asset\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/asset',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2ac3efed9b8a08b13c44a12f1d8b223::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2ac3efed9b8a08b13c44a12f1d8b223::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc2ac3efed9b8a08b13c44a12f1d8b223::$classMap;

        }, null, ClassLoader::class);
    }
}