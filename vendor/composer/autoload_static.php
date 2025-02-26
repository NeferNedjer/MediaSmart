<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdb55ab3a826cc81720434dd90eab926
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
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Author' => __DIR__ . '/../..' . '/entity/Author.php',
        'Category' => __DIR__ . '/../..' . '/entity/Category.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ControllerMedia' => __DIR__ . '/../..' . '/controller/ControllerMedia.php',
        'ControllerUser' => __DIR__ . '/../..' . '/controller/ControllerUser.php',
        'Employee' => __DIR__ . '/../..' . '/entity/Employee.php',
        'Exemplaire' => __DIR__ . '/../..' . '/entity/Exemplaire.php',
        'Media' => __DIR__ . '/../..' . '/entity/Media.php',
        'Model' => __DIR__ . '/../..' . '/entity/Model.php',
        'ModelMedia' => __DIR__ . '/../..' . '/model/ModelMedia.php',
        'ModelUser' => __DIR__ . '/../..' . '/model/ModelUser.php',
        'Subcategory' => __DIR__ . '/../..' . '/entity/Subcategory.php',
        'User' => __DIR__ . '/../..' . '/entity/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdb55ab3a826cc81720434dd90eab926::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdb55ab3a826cc81720434dd90eab926::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfdb55ab3a826cc81720434dd90eab926::$classMap;

        }, null, ClassLoader::class);
    }
}
