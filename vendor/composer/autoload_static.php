<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit334444ad7636a00d7f125047d707fd75
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit334444ad7636a00d7f125047d707fd75::$classMap;

        }, null, ClassLoader::class);
    }
}
