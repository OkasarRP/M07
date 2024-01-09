<?php


    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->safeload();

    define('ROOT', $_ENV['ROOT']);
    use App\Database\QueryBuilder;
    use App\Database\Connection;
    use App\Registry;
    // register all the services
    

    Container::bind('config', require 'config.php');
    
    Container::bind('database', new QueryBuilder(
        Connection::make(Registry::get('config')['db'])
    ));
    