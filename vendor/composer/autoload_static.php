<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0251bae3bd005d30528886613c1fe6eb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Steampixel' => 
            array (
                0 => __DIR__ . '/..' . '/steampixel/simple-php-router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0251bae3bd005d30528886613c1fe6eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0251bae3bd005d30528886613c1fe6eb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0251bae3bd005d30528886613c1fe6eb::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0251bae3bd005d30528886613c1fe6eb::$classMap;

        }, null, ClassLoader::class);
    }
}