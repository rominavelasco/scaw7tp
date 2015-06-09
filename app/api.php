<?php

/*
 * Application and layout framework includes
 */

require_once("Miner/Miner.php");
require_once("Validator/Validator.php");

require_once 'Slim/Slim.php';
require_once 'Views/TwigView.php';

Slim::init(array('view' => 'TwigView'));	

Slim::get('/', function () {
	// Set up a couple random variables to pass to the view
	$title = "Hi I'm a title";
	$body = "Something to display in the body";
	
	// Set data to be passed to the view template
	Slim::view()->setData(array('title' => $title, 'body' => $body));
	
	// Tell Slim/Twig which template to render for this route
    Slim::render('home.html');
});


Slim::get('/hello/:name', function ($name) {
    
    $valid = $Validator->validateData($name);
    
    if ($valid) {

    	$dataForTemplate = $Miner->selectData($name);
		
		if ($dataForTemplate) {
			Slim::view()->setData(array('data' => $dataForTemplate));
    		Slim::render('templateToRender.html');		
    	}

    } 

});


Slim::run();

?>