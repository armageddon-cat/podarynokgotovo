<?php
declare(strict_types=1);

// todo add files whitelist
function my_autoloader(string $class) {
    $autoloadFiles = [
        'app\Application' => 'src/Application.php',
        'app\Database' => 'src/Database.php',
        'models\MainPage' => 'src/models/MainPage.php',
    ];

    if (array_key_exists($class, $autoloadFiles)) {
        if (file_exists($autoloadFiles[$class])) {
            require_once $autoloadFiles[$class];
            return true;
        }
    }

    if (false !== strpos($class, 'admin')) {
        $class = '..\\' . $class;
    } elseif (false === strpos($class, 'app')) {
        $class = '..\src\\' . $class;
    }
    $class = str_replace('app', '..\src', $class);
    $file = $class . '.php';
    if (file_exists($file)) {
        require_once $file;
        return true;
    }
    return false;
}

spl_autoload_register('my_autoloader');