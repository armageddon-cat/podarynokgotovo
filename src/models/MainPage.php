<?php
declare(strict_types=1);

namespace models;

use app\Application;

class MainPage
{
    private $id;
    private $header;
    private $text;

    public function __construct() {}

    public function viewMainPage(): void
    {
        $db = Application::getDb();
        $sql = 'SELECT header, text FROM mainpage';
//        $res = $db->query($sql)->fetchAll();
//        foreach ($db->query($sql) as $row) {
//            print $row['header'] . "\t";
//            print $row['header'] . "\t";
//            print $row['header'] . "\n";
//        }
//        $prepared = $db->prepare($sql);
//        $prepared->execute();
//        $result = $prepared->fetchAll();
        foreach ($db->query($sql) as $row) {
            $this->setHeader($row['header']);
            $this->setText($row['text']);
        }

        $this->render();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getHeader(): string
    {
        return $this->header;
    }

    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function render(): void
    {
        include __DIR__ . '/../views/main.php';
    }
}