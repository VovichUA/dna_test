<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Class StroopController
 * @package App\Controller
 */
class StroopController
{
    public function index()
    {
        $colors = ['red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato'];
        $breadcrumb = ['/' => 'Главная', '/stroop' => 'Тест Струпа'];
        $color = []; $word = [];
        for ($i=0;$i<5;$i++) {
            shuffle($colors);
            $color[$i] = $colors[0];
            $word[$i] = $colors[1];
        }
        $stroop = true;

        require_once __DIR__ . '/../views/main/stroop.php';
    }

    public function resultStroop()
    {
        $count = 0;
        foreach ($_POST['result'] as $result) {
            $count += (int)$result;
        }
        $breadcrumb = ['/' => 'Главная', '/stroop' => 'Тест Струпа', '/stroop/result_stroop' => 'Результат теста'];
        $stroop = true;

        require_once __DIR__ . '/../views/main/stroop_result.php';
    }
}