#!/usr/bin/php
<?php system("clear"); //Очищаем экран перед выводом
echo "=================================\n";
echo "Простой консольный скрипт на php\n";
echo "=================================\n";
echo "help - справка\n";
echo "---------------------------------\n";
// Выполнение действия, в зависимости от параметра
if (isset($argv[1])){
    if ($argv[1] === 'help') {
        echo "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n";
        echo "просто вводите символы в кавычках через пробел и жмите ввод\n";
        echo "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n";
    } else {
        $array = explode(" ", $argv[1]);
        $arrayForView = [];
        foreach ($array as $value) {
            $arrayForView[] = (int)$value;
        }
        asort($arrayForView);
        $strForView = '';
        foreach ($arrayForView as $value){
            $strForView .= " ".$value;
        }
        echo "+++++++++++++++++++++++\n";
        echo $strForView."\n";
        echo "+++++++++++++++++++++++\n";
    }
}

echo "\n"; // Д