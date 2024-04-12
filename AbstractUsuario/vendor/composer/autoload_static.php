<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c430da3d7ebce976a5dea7fdc0f0d03
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Administrador' => __DIR__ . '/../..' . '/src/Administrador.php',
        'App\\AdministradorSupremo' => __DIR__ . '/../..' . '/src/AdministradorSupremo.php',
        'App\\Login' => __DIR__ . '/../..' . '/src/Login.php',
        'App\\Professor' => __DIR__ . '/../..' . '/src/Professor.php',
        'App\\Usuario' => __DIR__ . '/../..' . '/src/Usuario.php',
        'App\\UsuarioFactory' => __DIR__ . '/../..' . '/src/UsuarioFactory.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c430da3d7ebce976a5dea7fdc0f0d03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c430da3d7ebce976a5dea7fdc0f0d03::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c430da3d7ebce976a5dea7fdc0f0d03::$classMap;

        }, null, ClassLoader::class);
    }
}