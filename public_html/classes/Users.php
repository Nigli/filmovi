<?php
class Users{
	//get ALL from USERS table
	public static function GetAllFromUsers(){
		$db = Conn::GetConnection();
		$res = mysqli_query($db,"SELECT * FROM users");		
		while ($rw = mysqli_fetch_object($res,get_called_class())){
			$array[]=$rw;
		}
		return $array;
	}
	//get USER NAME by ID from USERS table
	public static function GetUserNameById($id){		
		$db = Conn::GetConnection();
		$res = mysqli_query($db,"SELECT name FROM users WHERE id='$id' limit 1");
		while($rw = mysqli_fetch_object($res)){
			return $rw->name;
		}
	}
	//inserts NAME into USERS table
	public static function InsertUser($name){
		$db = Conn::GetConnection();
		mysqli_query($db,"INSERT INTO users (name) VALUES('$name')");
	}	
	//deletes USER by ID from USERS table
	public static function DeleteUser($name){
		$db = Conn::GetConnection();
		mysqli_query($db,"DELETE FROM users WHERE name='$name'");
	}
}