<!--used for pages/admin.php-->

<?php require 'config.php';
if (isset($_POST['imdb_id'])) {
    $imdb_id = $_POST['imdb_id'];
    $movie_name = $_POST['movie_name'];
    Listafilmova::InsertMovieShort($imdb_id, $movie_name);
}
redirect_to('pages/admin.php');