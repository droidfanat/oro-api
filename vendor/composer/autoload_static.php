<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita89c61f41389fac988028b9dfe8bfdca
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'oroapi\\models\\entities\\interfaces\\' => 34,
            'oroapi\\models\\entities\\' => 23,
            'oroapi\\models\\' => 14,
            'oroapi\\client\\' => 14,
            'oroapi\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'oroapi\\models\\entities\\interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models/entities/interfaces',
        ),
        'oroapi\\models\\entities\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models/entities',
        ),
        'oroapi\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'oroapi\\client\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/client',
        ),
        'oroapi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita89c61f41389fac988028b9dfe8bfdca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita89c61f41389fac988028b9dfe8bfdca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}