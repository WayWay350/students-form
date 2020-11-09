<?php


#creat database class, extends default class PDO
class Database extends PDO
{
	#connect to db
	function __construct()
	{
		parent:: __construct('mysql:host=localhost; dbname=studenrs', 'root', '');
	}
}