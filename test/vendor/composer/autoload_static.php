<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita09ce2df6aeb0c665f755cc523d9d8bf
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInita09ce2df6aeb0c665f755cc523d9d8bf::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}