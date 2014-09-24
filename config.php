<?php
ini_set('display_erros',1);
define('ROOT', $_SERVER['DOCUMENT_ROOT'].'/');

require  ROOT.'vendor/autoload.php';
require  ROOT.'autoload.php';
require  ROOT.'functions/functions.php';
/* Configure the database and boot Eloquent */
use Illuminate\Database\Capsule\Manager as Capsule;
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

$capsule->setAsGlobal();
$capsule->bootEloquent();


$app = new \Slim\Slim(array(
     'debug' => true,
     'templates.path' => ROOT.'app/views'
	));



