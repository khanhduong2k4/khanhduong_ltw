<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a57a77f4ec1a1dc5fd47c23ca80af7c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a57a77f4ec1a1dc5fd47c23ca80af7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a57a77f4ec1a1dc5fd47c23ca80af7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8a57a77f4ec1a1dc5fd47c23ca80af7c::$classMap;

        }, null, ClassLoader::class);
    }
}