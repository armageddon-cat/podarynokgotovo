<?php
declare(strict_types=1);

namespace app;

class Database
{
    private $db;

    public function __construct()
    {
        $route = __DIR__ . '/mydb.sqlite';
        $dsn = 'sqlite:' . $route;
        $user = '';
        $password = '';

        try {
            $this->db = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo 'Подключение не удалось: ' . $e->getMessage();
        }
//        $this->db = new \SQLite3('mydb.sqlite');
        $this->db->exec('CREATE TABLE IF NOT EXISTS mainpage (id int, header varchar, text text)');
        $this->db->exec('CREATE TABLE IF NOT EXISTS users (id int, login varchar, password varchar)');
    }

    public function getDb(): \PDO
    {
        return $this->db;
    }
}