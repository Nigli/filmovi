<!--used in pages/admin.php-->

<h3>Unesi novi film</h3>
<form class="movie_insert" action="../movie_insert.php" method="post">
    <input class="imdb_admin" type="text" name="imdb_id" id="imdb_id" value="" placeholder="IMDB id">
    <input class="movie_name_admin" type="text" name="movie_name" id="movie_name" value="" placeholder="Ime filma">
    <input class="submit_admin" type="submit" name="submit" onClick="return confirm('Uneti novi film?')" value="unesi">
</form>
<h3>Ovo je trenutna lista filmova</h3>
<?php 
//    while ($res=mysqli_fetch_assoc($listaFilmovaQ)){
foreach (Listafilmova::GetAllFromMovies() as $k=>$movies){
    ?>
    <form class="row_admin" action="../movie_delete.php" method="post">
            <input class="imdb_admin" type="text" readonly="" name="imdb_id" value="<?php echo $movies->imdb_id?>" />
            <input class="movie_name_admin" type="text" readonly="" name="movie_name" value="<?php echo $movies->name?>" />
<!--                <input class="submit_admin" type="submit" name="edit" value="izmeni" />-->
            <input class="delete_admin" type="submit" name ="delete" onClick="return confirm('Obrisati film <?php echo $movies->name?>?');" value="obriši" />
    </form>        
<?php
}    
?>
<h3><a class="movie_list_refresh" href='../popcorn_database.php'>Osvezi listu sa PopcornTime filmovima</a></h3>