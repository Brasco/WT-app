<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf58ea1b4bb8ec0d51c9325055459c6bf
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZipStream\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZipStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/maennchen/zipstream-php/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\DBAL\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/dbal/lib',
            ),
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
            'Doctrine\\Common\\Cache\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/cache/lib',
            ),
            'Doctrine\\Common\\Annotations\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/annotations/lib',
            ),
            'Doctrine\\Common\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/common/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf58ea1b4bb8ec0d51c9325055459c6bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf58ea1b4bb8ec0d51c9325055459c6bf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf58ea1b4bb8ec0d51c9325055459c6bf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
