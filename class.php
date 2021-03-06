<?php
 
class CRUD{
	
	private $connection;
 //Инизиализация
	function __construct()
	{
		$this->connect_db();
	}
 //Подключение
	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'demo');
		if(mysqli_connect_error()){
			die("CRUD Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
 
	public function create($fname,$lname,$email,$gender,$age){
		$sql = "INSERT INTO `crud` (firstname, lastname, email, gender, age) VALUES ('$fname', '$lname', '$email', '$gender', '$age')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}
 //Чтение записи
	public function read($id=null){
		$sql = "SELECT * FROM `crud`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
 //Обновление
	public function update($fname,$lname,$email,$gender,$age, $id){
		$sql = "UPDATE `crud` SET firstname='$fname', lastname='$lname', email='$email', gender='$gender', age='$age' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}
 
	public function delete($id){
		$sql = "DELETE FROM `crud` WHERE id=$id";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}
 

 
}
 
$database = new CRUD();
 
?>