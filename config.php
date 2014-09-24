<?php
ini_set('display_erros',1);
define('ROOT', $_SERVER['DOCUMENT_ROOT'].'/loja-asolucoes/');

/* Configure the database and boot Eloquent */

$capsule = new Capsule;

$capsule->addConnection(array(
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => '',
    'username' => '',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => ''
));

$capsule->setGlobal();
$capsule->bootEloquent();

require ROOT.'vendor/autoload.php';



