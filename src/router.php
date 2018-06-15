<?php

use admin\controllers\MainPage;
use controllers\Login;

include '../src/autoloader.php';

$postRequest = $_GET['r'];

if ($postRequest === 'login') {
    $login = new Login($_POST['login'], $_POST['password']);
}

if ($postRequest === 'editmain') {
    $adminMainPage = new MainPage();
    $adminMainPage->save($_POST['header'], $_POST['text']);
}