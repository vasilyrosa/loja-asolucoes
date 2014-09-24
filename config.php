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


/* CONFIGURANDO SLIM E TWIG */


/*$app = new \Slim\Slim(array(
     'debug' => true,
     'templates.path' => ROOT.'app/views'
	));*/

$app = new \Slim\Slim(array(
     'debug'=> true
    ));

$loader = new Twig_Loader_Filesystem(ROOT.'app/views');

$twig = new Twig_Environment($loader, array(
    'debug'=> true,
    'cache' => ROOT.'cache',
));



