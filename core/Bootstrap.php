<?php
class Bootstrap{

function __construct(){
	#controllers
	#take and cut url 
@$url = $_GET['url'];
$url = explode('/', $url);
    #if empty url - create object class Index and load object of load model. requiring default controller index
if(empty($url[0])){
	require_once ('Controllers/index.php');
	$controllers = new Index();	
	$controllers->loadModel('index');
}else{
    #if isset url, creat and check path to the controller. Create new class and load method for use model and model`s methods
	$path = 'Controllers/' . $url[0] . '.php';
	if(file_exists($path)){
		require_once $path;
		$controllers = new $url[0];
		$controllers->loadModel($url[0]);
	}else{
	#if empty url - create object class Index and load object of load model. requiring default controller index	
		require_once ('Controllers/index.php');
		$controllers = new Index();	
		$controllers->loadModel('index');
	}
}
	
	#parametres
	#take parametres from url
	#creat array parametres
  $c_url = count($url);
  for ($p=2; $p < $c_url ; $p++) { 
  	 $params[] = $url[$p];
  }
  #methods 
  #check methods
  if(empty($url[1])){
  	#if empty methods, load default ,ethod
  	$controllers->index();
  }else{
  	#if isset method, class object request to method with parametres
  	if(method_exists($controllers, $url[1])){
  		@$controllers->{$url[1]}($params);
  	}else{
  		$controllers->index();
  	}
   }
}   


  }

// if(!empty($url[2])){
// 	if(method_exists($controllers, $url[1])){
// 		$controllers->{$url[1]}($url[2]);
// 	}else{
// 		$controllers->index();
// 	}
// }else{
// 	if(!empty($url[1])){
// 		if(method_exists($controllers, $url[1])){
// 			$controllers->{$url[1]}();
// 		}else{
// 			$controllers->index();
// 		}
// 	}else{
// 		$controllers->index();
// 	}
// }