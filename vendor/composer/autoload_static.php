<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf48d1b29c9ce81d579aac00d7f927dc
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitdf48d1b29c9ce81d579aac00d7f927dc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
