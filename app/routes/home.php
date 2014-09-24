<?php

$app->get('/', function() use($app, $twig){

	$dados = array('nome'=>'Everton Rosa');
	$template = $twig->loadTemplate('home.html')->display($dados);

});