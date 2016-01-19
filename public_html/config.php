<?php
//defining application directorium
define("APP_DIR", __DIR__ . "/");
//class autoload
function __autoload($classname)
{
    require_once(APP_DIR . "classes/{$classname}.php");
}

//redirection
function redirect_to($new_location)
{
    header("Location: " . $new_location);
}

//funkcija za vracanje stringa koji je izmedju dva karaktera ili vise karaktera
function getBetween($content, $start, $end)
{
    $r = explode($start, $content);
    if (isset($r[1])) {
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}