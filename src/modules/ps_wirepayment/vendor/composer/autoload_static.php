<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0d804a399f13ba799549573ddea6677
{
    public static $classMap = array (
        'Ps_Wirepayment' => __DIR__ . '/../..' . '/ps_wirepayment.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd0d804a399f13ba799549573ddea6677::$classMap;

        }, null, ClassLoader::class);
    }
}
