<?php 
class Conn{
    const DBUSER = "root";
    const DBPASS = "";
    const DBHOST = "localhost";
    const DB = "filmovi";
    public static $conn;
    public static function GetConnection(){
            if(!self::$conn){
                    self::$conn = mysqli_connect(self::DBHOST,self::DBUSER,self::DBPASS,self::DB);
                    mysqli_set_charset(self::$conn,"utf8");
            }
            return self::$conn;
    }	
}