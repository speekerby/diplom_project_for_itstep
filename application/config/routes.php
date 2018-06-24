<?php

return [

    // MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
//    'main/index/{page:\d+}' => [
//        'controller' => 'main',
//        'action' => 'index',
//    ],
    'about' => [
        'controller' => 'main',
        'action' => 'about',
    ],
    'contact' => [
        'controller' => 'main',
        'action' => 'contact',
    ],
    'post/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'post',
    ],
    'main/blog/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'blog',
    ],
    'blog' => [
        'controller' => 'main',
        'action' => 'blog',
    ],

    //AdminController
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/posts/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],

];