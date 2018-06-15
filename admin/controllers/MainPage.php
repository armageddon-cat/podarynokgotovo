<?php
declare(strict_types=1);

namespace admin\controllers;

use app\Application;

class MainPage
{
    public function save(string $header, string $text): void
    {
        $db = Application::getDb();
        $sql = 'INSERT INTO mainpage (`header`, `text`) VALUES (:header, :text)';
        $res = $db->prepare($sql)->execute([':header' => $header, ':text' => $text]);
    }

    public function render(): void
    {
        include '../admin/views/main.php';
    }
}