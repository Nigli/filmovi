<!-- used for pages/glasanje.php-->

<?php require 'config.php';
$user_id=$_POST['user_id'];
$ratings=$_POST;
foreach ($ratings as $imdb_id=>$rating){
    if(substr($imdb_id,0,1) == "t" && $rating!=0){
        Movierankings::InsertMovieRatins($imdb_id,$user_id,$rating);
    }
}
redirect_to('pages/results.php');