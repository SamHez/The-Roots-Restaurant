<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97a30180e4e7b1bad3537b75b5c84fa5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97a30180e4e7b1bad3537b75b5c84fa5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97a30180e4e7b1bad3537b75b5c84fa5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit97a30180e4e7b1bad3537b75b5c84fa5::$classMap;

        }, null, ClassLoader::class);
    }
}