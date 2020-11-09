<?php

#creat class View
class View{
	#creat method render
	function render($name, $arg = false){
		#require views file and sedn argumens from controllers
		require_once ('views/' . $name . '.php');
	}
}