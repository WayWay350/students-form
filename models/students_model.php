<?php

class Students_model extends Model
{
	function __construct(){
		#for use db and PDO
		parent:: __construct();
	}
	#method for shows base with sdundens
	function show_Students(){
		#sql request to db
		$sql = "SELECT * FROM students";
		$query =  $this->db->query($sql);
		$this->answer = array();
		#take array with all records
		$this->answer = $query->fetchAll();
	}
	#method for add new students to base
	function add_Students($data){
		#sql request to db
		$stmt = $this->db->prepare("INSERT INTO students(id, name, age, sex, grou, faculty) VALUES (:id, :name, :age, :sex, :grou, :faculty)");
		#isnser array new records from form
		$stmt->execute(array(
			'id'=> NULL,
			'name'=>$data['name'],
			'age'=>$data['age'],
			'sex'=>$data['sex'],
			'grou'=>$data['group'],
			'faculty'=>$data['faculty']
			));
	}
	#method for delete one student from base
	function delete_Students($id){
		#sql request to db
		$stmt = $this->db->prepare("DELETE FROM students WHERE id = :id");
		#delete one record from db
		$stmt->execute(['id' =>$id]);
	}
	#method for take sudent`s id
	function get_IdStudents($id = false){
		#sql request to db
		$stmt = $this->db->prepare("SELECT * FROM students WHERE id = :id");
		$stmt->execute(['id' => $id]);
		#take one record from db to id
		return $stmt->fetchAll();
	}
	#method for change one records in db
	function change_Students($data){
		#sql request to db
		$stmt = $this->db->prepare("UPDATE students SET name = :name, age = :age, sex = :sex, grou = :grou, faculty = :faculty WHERE id = :id");
		#take array`s records from db
		$stmt->execute(array(
			'id'=>$data['id'],
			'name'=>$data['name'],
			'age'=>$data['age'],
			'sex'=>$data['sex'],
			'grou'=>$data['group'],
			'faculty'=>$data['faculty']
			));
	// var_dump($data);
	}

}