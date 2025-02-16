<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1be5a8b4ddedb27c6f6767befe8d7d91
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thiagoalessio\\TesseractOCR\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thiagoalessio\\TesseractOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/thiagoalessio/tesseract_ocr/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1be5a8b4ddedb27c6f6767befe8d7d91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1be5a8b4ddedb27c6f6767befe8d7d91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1be5a8b4ddedb27c6f6767befe8d7d91::$classMap;

        }, null, ClassLoader::class);
    }
}
