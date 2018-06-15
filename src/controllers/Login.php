<?php
declare(strict_types=1);

namespace controllers;

use admin\controllers\MainPage;
use app\Application;
use app\Session;

class Login
{
    private $login;
    private $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;

        $this->auth();

        (new MainPage())->render();
    }

    public function auth()
    {
        $db = Application::getDb();
        $sql = 'SELECT login, password FROM users where login = :login';
        $prepared = $db->prepare($sql);
        $prepared->bindValue(':login', $this->login, \PDO::PARAM_STR);
        $prepared->execute();
        $result = $prepared->fetchObject();
        if (password_verify($this->password, $result->password)) {
            Session::start();
            return true;
        }

        echo 'Invalid password.';

        return false;
    }
}