<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7d25605ee6e39db8492f217b991dd24
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Youp\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Youp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7d25605ee6e39db8492f217b991dd24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7d25605ee6e39db8492f217b991dd24::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
