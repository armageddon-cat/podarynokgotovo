<?php
declare(strict_types=1);

namespace app;

use models\MainPage;

class Application
{
    private static $db;

    public static function start(): void
    {
        self::$db = (new Database())->getDb();
        $mainp = new MainPage();
        $mainp->viewMainPage();
    }

    public static function getDb(): \PDO
    {
        if (null === self::$db) {
            self::$db = (new Database())->getDb();
        }
        return self::$db;
    }
}