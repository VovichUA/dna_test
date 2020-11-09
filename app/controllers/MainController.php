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
        $breadcrumb = ['/' => 'Главная'];

        require_once __DIR__ . '/../views/main/index.php';
    }

    public function twoClasses()
    {
        $breadcrumb = ['/' => 'Главная', '/two_classes' => 'Выбрать класс и метод'];
        $two_class = true;

        require_once __DIR__ . '/../views/main/two_classes.php';
    }
}