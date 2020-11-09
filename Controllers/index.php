<?php
#create default controller
class Index extends Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}
	function index(){
		#chek metod render
		$this->view->render('index/index');
	}
}