<?php

declare(strict_types=1);

namespace App\Controller;

use App\Libraries\simple_html_dom;

/**
 * Class ParsTerrikonController
 * @package App\Controller
 */
class ParsTerrikonController
{
    const TERRIKON = 'https://terrikon.com/football/italy/championship/';

    public function index()
    {
        $breadcrumb = ['/' => 'Главная', '/terrikon' => 'данные для поиска'];
        $seasons = [ '2009-10', '2010-11', '2011-12', '2012-13', '2013-14', '2014-15', '2015-16', '2016-17',
            '2017-18', '2018-19', '2019-20', ''];

        require_once __DIR__ . '/../views/terrikon/index.php';
    }

    public function result()
    {
        $html = new simple_html_dom();
        $html->load_file(self::TERRIKON.$_POST['season']);

        $tableString = $html->find('table.colored.big', 0)->plaintext;
        $tableArray = explode($_POST['team'],$tableString);

        $teamPosition = substr(trim($tableArray[0]),-3,2);
        $season = trim($_POST['season'], '/table');

        $breadcrumb = [
            '/' => 'Главная',
            '/terrikon' => 'данные для поиска',
            '/terrikon/result' => 'результат поиска'
        ];

        require_once __DIR__ . '/../views/terrikon/result.php';
    }
}