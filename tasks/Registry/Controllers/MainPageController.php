<?php
declare(strict_types=1);

namespace Registry\Controllers;

class MainPageController
{
    public static function index(): void
    {
        require_once __DIR__ . '/../pub/_main-page.php';
    }
}
