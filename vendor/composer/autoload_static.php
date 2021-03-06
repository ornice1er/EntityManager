<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34cbc161fee172061e90906551673cf6
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Usthenet\\Entitymanager\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Usthenet\\Entitymanager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34cbc161fee172061e90906551673cf6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34cbc161fee172061e90906551673cf6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34cbc161fee172061e90906551673cf6::$classMap;

        }, null, ClassLoader::class);
    }
}
