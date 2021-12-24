<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5299900a26b5c61ee5f3cbc04a9f6e66
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'B' => 
        array (
            'Bulakh\\Services\\' => 16,
            'Bulakh\\Models\\' => 14,
            'Bulakh\\Infrastructure\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Bulakh\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/services',
        ),
        'Bulakh\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Bulakh\\Infrastructure\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/infrastructure',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5299900a26b5c61ee5f3cbc04a9f6e66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5299900a26b5c61ee5f3cbc04a9f6e66::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
