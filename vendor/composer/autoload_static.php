<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2b643baf758a1a736d18a91869ad540
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2b643baf758a1a736d18a91869ad540::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2b643baf758a1a736d18a91869ad540::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
