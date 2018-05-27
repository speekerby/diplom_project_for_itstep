<?php

return [
    //Главная страница
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    //Страница авторизации
    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],
    //Страница регистрации
    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
    ],

    'news/show' => [
        'controller' => 'news',
        'action' => 'show',
    ],
];