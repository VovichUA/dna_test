<?php

declare(strict_types=1);

namespace App\Controller\NumberClasses;

use App\Interfaces\NumberInterface;

/**
 * Class FirstClass
 * @package App\Controller\NumberClasses
 */
class FirstClass implements NumberInterface
{
    public function getClassName()
    {
        $message = 'First';
        $breadcrumb = [
            '/' => 'Главная',
            '/two_classes' => 'Выбрать класс и метод',
            '/two_classes/first_class_name' => 'first class name'
        ];
        $two_class = true;

        require_once __DIR__.'/../../views/two_classes/index.php';
    }

    public function getLetter()
    {
        $message = 'A';
        $breadcrumb = [
            '/' => 'Главная',
            '/two_classes' => 'Выбрать класс и метод',
            '/two_classes/first_letter' => 'first letter'
        ];
        $two_class = true;

        require_once __DIR__.'/../../views/two_classes/index.php';
    }
}