<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit334444ad7636a00d7f125047d707fd75
{
    public static $classMap = array (
        'AppContainer' => __DIR__ . '/../..' . '/core/AppContainer.php',
        'ComposerAutoloaderInit334444ad7636a00d7f125047d707fd75' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit334444ad7636a00d7f125047d707fd75' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'HomeController' => __DIR__ . '/../..' . '/controllers/HomeController.php',
        'LoginController' => __DIR__ . '/../..' . '/controllers/LoginController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Session' => __DIR__ . '/../..' . '/core/Session.php',
        'StudentsController' => __DIR__ . '/../..' . '/controllers/StudentsController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit334444ad7636a00d7f125047d707fd75::$classMap;

        }, null, ClassLoader::class);
    }
}
