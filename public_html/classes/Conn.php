<?php

class Conn
{
    const DBUSER = "root";
    const DBPASS = "";
    const DBHOST = "localhost";
    const DB = "filmovi";
    public static $conn;

    public static function GetConnection()
    {
        if (!self::$conn) {
            self::$conn = new PDO("mysql:dbhost=" . self::DBHOST . ";dbname=" . self::DB . ";charset=utf8",
                self::DBUSER, self::DBPASS);
        }
        return self::$conn;
    }
}