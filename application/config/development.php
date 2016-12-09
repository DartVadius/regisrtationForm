<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

return [
    'layout' => 'layout',
    'db' => [
        'host' => 'localhost',
        'name' => 'login',
        'user' => 'root',
        'password' => ''
    ],
    'test' => [
        'name' => "DartVadius",
        'email' => 'testEmail@gmail.com',
    ]
];