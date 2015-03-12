<!--used for pages/admin.php-->

<?php require 'config.php';
if(isset($_POST['watched'])){
    $watched=$_POST['watched'];
    $imdb_id=$_POST['imdb_id'];
    print_r($_POST);
    Listafilmova::WatchedMovie($imdb_id,$watched);
}
redirect_to('pages/admin.php');