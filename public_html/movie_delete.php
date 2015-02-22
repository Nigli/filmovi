<?php require 'function.php';
if(isset($_POST['delete'])){
    $imdb_id=$_POST['imdb_id'];
    $movie_name=$_POST['movie_name'];
    //deleting movie  
    $upit="DELETE FROM listafilmova WHERE imdb_id='$imdb_id'";
    $deleteMovie = mysqli_query($conn,$upit);
}
redirect_to('admin.php');