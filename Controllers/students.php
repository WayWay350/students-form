<?php

#creat a controller that extends the main controller
class Students extends Controller
{
	#check conrstruct from main controller
	function __construct()
	{
		parent:: __construct();
	}
	#method of show the student base. check model and use class view
	function students(){
		#use method from models.
		$this->model->show_Students();
		$this->view->render('index/hello', $this->model->answer);
		#audit for button
			switch (true) {
			case (!empty($_POST['add'])):
				header('location: http://base/students/addbase');
				break;
			case (!empty($_POST['main'])):
				header('location: http://base/');
				break;
			}

	}
	#method to add to the database. check model and use class view
	function addbase(){
		#check inputs
		if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['sex']) && !empty($_POST['group']) && !empty($_POST['faculty'])){
			if($_POST['sex'] === 'male' || $_POST['sex'] === 'female'){
				$this->model->add_Students($_POST);
				header('location: http://base/students/students');
			}else{
				echo 'Wrong your sex. Write correct value';
			}
		}else{
			$this->view->render('index/addbase');
		}
			$this->view->render('index/addbase');
			#audit for button
			switch (true) {
			case (!empty($_POST['base'])):
				header('location: http://base/students/students');
				break;
			case (!empty($_POST['main'])):
				header('location: http://base/');
				break;
			}
	}
	#method to delete from the base. check model and use class view
	function delbase($value){
		if($this->model->delete_Students($value[0]) ==! true){
			#if false redirect to students list
			header('location: http://base/students/students');
		}
	}
	#method to edit base. check model and use class view
	function upgrade($value){
		
		if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['sex']) && !empty($_POST['group']) && !empty($_POST['faculty'])){
			if($_POST['sex'] == 'male' || $_POST['sex'] == 'female'){
				$this->model->change_Students($_POST);
					header('location: http://base/students/students');
			}else{
				echo 'Wrong your sex. Write correct value';
				}
		}else{
			$this->view->render('index/upbase', $this->model->get_IdStudents($value[0]));
			}
		$this->view->render('index/upbase', $this->model->get_IdStudents($value[0]));
		#audit for button
			switch (true) {
			case (!empty($_POST['base'])):
				header('location: http://base/students/students');
				break;
			case (!empty($_POST['main'])):
				header('location: http://base/');
				break;
			}
	
	}
}

