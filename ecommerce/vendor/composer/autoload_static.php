<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbd358d81130295878b11f3167185a3d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbd358d81130295878b11f3167185a3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbd358d81130295878b11f3167185a3d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
