<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Class MainController
 * @package App\Controller
 */
class MainController
{
    public function index()
    {
        $page_title = 'DNA_325';
        $breadcrumb = [ '/' => 'Главная'];
        require __DIR__ . '/../views/main/index.php';
    }
}