<?php
class Users{
//        //session test
//        function setSessions(){
//            Session::set("id",$this->id);
//            Session::set("name",$this->name);
//        }
	//get ALL from USERS table
	public static function GetAllFromUsers(){
		$db = Conn::GetConnection();
                $res = $db->query("SELECT * FROM users");
                while ($users = $res->fetchObject(get_called_class())) {
                    $array[]=$users;
                }    
                return $array;
	}
	//get USER NAME by ID from USERS table
	public static function GetUserNameById($id){		
		$db = Conn::GetConnection();
                $res = $db->query("SELECT name FROM users WHERE id='$id' limit 1");
                $user = $res->fetchObject(get_called_class());
                return $user->name;
	}
	//inserts NAME into USERS table
	public static function InsertUser($name){
		$db = Conn::GetConnection();
                $db->exec("INSERT INTO users (name) VALUES('$name')");
	}	
	//deletes USER by ID from USERS table
	public static function DeleteUser($name){
		$db = Conn::GetConnection();
                $db->exec("DELETE FROM users WHERE name='$name'");
	}
}