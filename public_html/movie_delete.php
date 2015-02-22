<!--used for pages/admin.php-->

<?php require 'config.php';
if(isset($_POST['delete'])){
    $imdb_id=$_POST['imdb_id'];
    Listafilmova::DeleteMovie($imdb_id);
}
redirect_to('pages/admin.php');