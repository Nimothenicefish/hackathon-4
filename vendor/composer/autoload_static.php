<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07e888c333a6c2ff2f87d63e0c18df56
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hackathon\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hackathon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07e888c333a6c2ff2f87d63e0c18df56::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07e888c333a6c2ff2f87d63e0c18df56::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
