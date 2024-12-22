<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3fd88ad15ea72652c8970133682cfba
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'N' => 
        array (
            'Nvm\\Price_History\\' => 18,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Nvm\\Price_History\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'Analog' => 
            array (
                0 => __DIR__ . '/..' . '/analog/analog/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3fd88ad15ea72652c8970133682cfba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3fd88ad15ea72652c8970133682cfba::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd3fd88ad15ea72652c8970133682cfba::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd3fd88ad15ea72652c8970133682cfba::$classMap;

        }, null, ClassLoader::class);
    }
}
