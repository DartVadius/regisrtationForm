<?php
function autoloadMain($class) {
    preg_match_all('/[A-Z][^A-Z]*/', $class, $results);
    $results =  end($results[0]);
    $pathToClassFile = __DIR__ . '/../'. strtolower($results). '/' . $class.'.php';
    if (file_exists($pathToClassFile)) {
        require_once $pathToClassFile;
    }
}
function autoloadTwig() {
    require_once PUB . '/lib/Twig/Autoloader.php';
}
spl_autoload_register('autoloadMain');
spl_autoload_register('autoloadTwig');

define('APPLICATION_ENV', $_SERVER['APPLICATION_ENV']);

return [    
    'defaultController' => 'index',
    'defaultAction' => 'index',
    'exceptionController' => 'error',
    'exceptionAction' => 'error',
    'title' => 'Test',    
    'login_length' => 6,    
    'pass_length' =>6,    
    'db' => [
        'host' => '',
        'name' => '',
        'user' => '',
        'password' => ''
    ],
    'email' => [
        'name' => "DartVadius",
        'email' => 'test@gmail.com'
    ]
];