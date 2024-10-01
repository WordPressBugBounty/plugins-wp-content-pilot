<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd0f0e485a47324d77f808ed6405cd4b6
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd0f0e485a47324d77f808ed6405cd4b6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd0f0e485a47324d77f808ed6405cd4b6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd0f0e485a47324d77f808ed6405cd4b6::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
