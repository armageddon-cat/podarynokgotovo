<?php
declare(strict_types=1);

namespace app;

class Session
{
    public static function start(): bool
    {
        return session_start();
    }
}