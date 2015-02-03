<?php require 'function.php';
$user_id=$_POST['user_id'];
$ratings=$_POST;
foreach ($ratings as $imdb_id=>$rating){
    if(substr($imdb_id,0,1) == "t" && $rating!=0){
        $upit= "INSERT INTO movie_rankings (imdb_id,user_id,rating) VALUES ('$imdb_id','$user_id','$rating')";
        $insertRating = mysqli_query($conn,$upit);
    }
}
redirect_to('results.php');