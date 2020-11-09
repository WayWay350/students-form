<?php

#creat main controller
class Controller{
	#creat new object of class View
	function __construct(){
		$this->view = new View;
	}
	#method for require models, for use db and model`s methods
	function loadModel($name){
		#create path to models class
		$path = 'models/' . $name . '_model.php';
		#create name for class
		$modelName = $name . '_model';
		#check path 
		if(file_exists($path)){
			require_once $path;
			#if file exists, creat new class oject
			$this->model = new $modelName;
		}
	}
}