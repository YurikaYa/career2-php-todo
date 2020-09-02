<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;
use Phpmig\Adapter;
use Pimple\Container;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$container = new Container();

$container['db'] = function () {
    $dbh = new PDO('mysql:dbname='.$_ENV['DB_NAME'].';host=127.0.0.1', $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
};

$container['phpmig.adapter'] = function ($c) {
    return new Adapter\PDO\Sql($c['db'], 'migrations');
};

$container['phpmig.migrations_path'] = __DIR__ . DIRECTORY_SEPARATOR . 'migrations';

return $container;