<?php

declare(strict_types=1);

namespace App\Controller\NumberClasses;

use App\Interfaces\NumberInterface;

/**
 * Class SecondClass
 * @package App\Controller\NumberClasses
 */
class SecondClass implements NumberInterface
{
    public function getClassName()
    {
        $message = 'second';
        $message = 'B';
        $breadcrumb = [
            '/' => 'Главная',
            '/two_classes' => 'Выбрать класс и метод',
            '/two_classes/second_class_name' => 'second class name'
        ];

        require_once __DIR__.'/../../views/two_classes/index.php';
    }

    public function getLetter()
    {
        $message = 'B';
        $breadcrumb = [
            '/' => 'Главная',
            '/two_classes' => 'Выбрать класс и метод',
            '/two_classes/second_letter' => 'second letter'
        ];

        require_once __DIR__.'/../../views/two_classes/index.php';
    }
}