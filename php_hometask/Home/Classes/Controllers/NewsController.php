<?php

/**
 * Class NewsController
 * @package Phpcourse\Myproject\Classes\Controllers
 */

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;

class NewsController implements ControllerMethodName
{

    public function index(): void
    {

        $news = [
            [
                'title' => 'ЕТІ',
                'text' => 'Економіко-технологічний інститут',
                'data' => '23.04.23'

            ],
            [
                'title' => 'ХНУРЕ',
                'text' => 'Харківський національний университет радіоелектроніки',
                'data' => '24.04.23'
            ],
            [
                'title' => 'Адреса',
                'text' => 'Район Жадова 36',
                'data' => '25.04.23'
            ]
        ];
        // Передали масив з темами в шаблон
        $data = ['news' => $news, 'page' => 'news'];
        // створили об'єкт класу Rendering, передали в нього масив з темами та назву сторінки
        new News($data);
    }
}