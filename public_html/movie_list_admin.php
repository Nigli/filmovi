<!--used in pages/admin.php-->

<h3>Unesi novi film</h3>
<form class="movie_insert" action="../movie_insert.php" method="post">
    <input class="imdb_admin" type="text" name="imdb_id" id="imdb_id" value="" placeholder="IMDB id">
    <input class="movie_name_admin" type="text" name="movie_name" id="movie_name" value="" placeholder="Ime filma">
    <input class="submit_admin" type="submit" name="submit" onClick="return confirm('Uneti novi film?')" value="unesi">
</form>
<h3>Ovo je trenutna lista filmova</h3>
<?php
foreach (Listafilmova::GetAllMovies() as $k=>$movies){
    ?>
    <form class="row" action="../movie_watched.php" method="post">
            <input class="imdb_admin" type="text" readonly="" name="imdb_id" value="<?php echo $movies->imdb_id?>" />
            <input class="movie_name_admin" type="text" readonly="" name="movie_name" value="<?php echo $movies->name?>" />
<!--                <input class="submit_admin" type="submit" name="edit" value="izmeni" />-->
            <?php 
            if($movies->watched==1){
                ?><button class="delete_admin tooltip" type="submit" name ="watched" value="0" title="Movie has been watched" onClick="return confirm('Film <?php echo $movies->name?> je vec odgledan!');"><i class="fa fa-eye fa-2x watched"></i></button>
                <?php
            }else{
                ?>
                <button class="delete_admin tooltip" type="submit" name ="watched" value="1" title="Click to confirm that movie has been watched" onClick="return confirm('Odgledan film <?php echo $movies->name?>?');"><i class="fa fa-eye fa-2x" ></i></button>
                <?php
            }
            ?>
            
    </form>        
<?php
}    
?>
<div><a id="popcorn" data-anim="spinner" href='../popcorn_database.php'>Refresh list with PopcornTime movies</a></div>
<script src="../js/spinner.js"></script>