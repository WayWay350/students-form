<?php

#creat main controller
class Controller{
	#creat new object of class View
	function __construct(){
		$this->view = new View;
	}
	#method for require models, for use db and model`s methods
	function loadModel($name){
		$path = 'models/' . $name . '_model.php';
		$modelName = $name . '_model';
		if(file_exists($path)){
			require_once $path;
			#if file exists, creat new class oject
			$this->model = new $modelName;
		}
	}
}