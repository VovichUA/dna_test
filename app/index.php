<?php

use App\Controller\MainController;

ini_set('display_errors', 1);
error_reporting(E_ALL);
require __DIR__.'/vendor/autoload.php';

$app = new MainController();
if (trim($_SERVER["REQUEST_URI"]) === '/') {
    $app->index();
} else {
    require_once __DIR__.'/views/404.php';
}