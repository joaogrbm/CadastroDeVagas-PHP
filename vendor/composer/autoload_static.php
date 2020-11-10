<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1a693c8c924969629f58cc367d47c66
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1a693c8c924969629f58cc367d47c66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1a693c8c924969629f58cc367d47c66::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1a693c8c924969629f58cc367d47c66::$classMap;

        }, null, ClassLoader::class);
    }
}