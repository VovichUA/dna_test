<?php

use App\Controller\MainController;
use App\Controller\NumberClasses\FirstClass;
use App\Controller\NumberClasses\SecondClass;
use App\Controller\StroopController;

ini_set('display_errors', 1);
error_reporting(E_ALL);
require __DIR__.'/vendor/autoload.php';

$app = new MainController();
$firstClass = new FirstClass();
$secondClass = new SecondClass();
$stroop = new StroopController();
if (trim($_SERVER["REQUEST_URI"]) === '/') {
    $app->index();
} elseif (trim($_SERVER["REQUEST_URI"]) === '/two_classes') {
    $app->twoClasses();
} elseif (trim($_SERVER["REQUEST_URI"]) === '/two_classes/first_class_name') {
    $firstClass->getClassName();
} elseif (trim($_SERVER["REQUEST_URI"]) === '/two_classes/first_letter') {
    $firstClass->getLetter();
} elseif (trim($_SERVER["REQUEST_URI"]) === '/two_classes/second_class_name') {
    $secondClass->getClassName();
} elseif (trim($_SERVER["REQUEST_URI"]) === '/two_classes/second_letter') {
    $secondClass->getLetter();
} elseif (trim($_SERVER["REQUEST_URI"]) === '/stroop') {
    $stroop->index();
} elseif (trim($_SERVER["REQUEST_URI"]) === '/stroop/result_stroop') {
    $stroop->resultStroop();
} else {
    require_once __DIR__.'/views/404.php';
}