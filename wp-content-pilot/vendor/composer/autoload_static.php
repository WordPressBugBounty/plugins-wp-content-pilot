<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0f0e485a47324d77f808ed6405cd4b6
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Curl\\ArrayUtil' => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl/ArrayUtil.php',
        'Curl\\CaseInsensitiveArray' => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl/CaseInsensitiveArray.php',
        'Curl\\Curl' => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl/Curl.php',
        'Curl\\Decoder' => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl/Decoder.php',
        'Curl\\Encoder' => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl/Encoder.php',
        'Curl\\MultiCurl' => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl/MultiCurl.php',
        'Curl\\StringUtil' => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl/StringUtil.php',
        'Curl\\Url' => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl/Url.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0f0e485a47324d77f808ed6405cd4b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0f0e485a47324d77f808ed6405cd4b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd0f0e485a47324d77f808ed6405cd4b6::$classMap;

        }, null, ClassLoader::class);
    }
}
