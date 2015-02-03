<?php
//redirection
    function redirect_to($new_location) {
            header("Location: " . $new_location);
            exit;
    }
//name by user_id function
    function user_name_by_id($conn,$user_id){
        $upit = "SELECT name FROM users WHERE id='$user_id' limit 1";
        $users=mysqli_query($conn,$upit);
        while ($user=mysqli_fetch_assoc($users)) {           
            return $user['name'];
        }        
    }
//movie name by imdb_id function    
    function movie_name_by_imdb_id($conn,$imdb_id){
        $upit = "SELECT name FROM listafilmova WHERE imdb_id='$imdb_id'";
        $movies=mysqli_query($conn,$upit);
        while ($movie=mysqli_fetch_assoc($movies)) {           
            return $movie['name'];
        }
    }
//movie list function
    function movie_results_list($conn,$result){
        while ($res=mysqli_fetch_assoc($result)) {
            $imdb_id=$res['imdb_id'];
            $upit="SELECT * FROM listafilmova WHERE imdb_id='$imdb_id'";
            $movies = mysqli_query($conn,$upit);
            while ($movie = mysqli_fetch_assoc($movies)) {
                echo $movie['name']." points ".$res['sumrating']."<br>";
            }
        }
    }
//funkcija za vracanje stringa koji je izmedju dva karaktera ili vise karaktera
    function getBetween($content,$start,$end){
        $r = explode($start, $content);
        if (isset($r[1])){
            $r = explode($end, $r[1]);
            return $r[0];
        }
        return '';
    }
//connection
    $conn = mysqli_connect("localhost","root","","filmovi");   
    if(mysqli_error($conn)){
        echo "nesto nije u redu";
    }else {
    }
    mysqli_set_charset($conn,"utf8");
    
//movie list query
    $listaFilmovaQ = mysqli_query($conn,"select * from listafilmova");

//user list query
    $userList = mysqli_query($conn, "select * from users");
