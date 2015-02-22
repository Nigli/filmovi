<?php require 'function.php';
if(isset($_POST['imdb_id'])){
    $imdb_id=$_POST['imdb_id'];
    $movie_name=$_POST['movie_name'];
    //adding movie
    $upit="INSERT INTO listafilmova (imdb_id,name) VALUES('$imdb_id','$movie_name')";
    $insertMovie = mysqli_query($conn,$upit);
}
redirect_to('pages/admin.php');