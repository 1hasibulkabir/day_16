<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite235e256ac0e81bf99163e254ac2378c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite235e256ac0e81bf99163e254ac2378c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite235e256ac0e81bf99163e254ac2378c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite235e256ac0e81bf99163e254ac2378c::$classMap;

        }, null, ClassLoader::class);
    }
}
