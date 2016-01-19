<!-- used in glasanje.php-->

<?php
foreach (Listafilmova::GetAllNotWatchedMovies() as $k => $movie) {
    ?>
    <div class="row">
        <div class="icon tooltip_img"
             title="<img width='100%' height='100%' src='<?php echo $movie->poster ?>'/><strong>Movie title:</strong> <?php echo $movie->name ?><br><strong>Movie release:</strong> <?php echo $movie->year ?><br><strong>Duration:</strong> <?php echo $movie->runtime ?><br><strong>Director:</strong> <?php echo $movie->director ?><br><strong>Actors:</strong> <?php echo $movie->actors ?>"></div>
        <div class="title"><?php echo $movie->name ?></div>
        <select class="rating_vote" name="<?php echo $movie->imdb_id ?>">
            <?php
            for ($i = 0; $i <= 10; $i++) {
                ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php }
            ?>
        </select>
        <?php
        echo "<button class='trailer tooltip' title='Open trailer for {$movie->name}' type='button' onclick='atributeChange(\"{$movie->youtube_id}\")'>Trailer</button>";
        ?>
        <div class="imdb_rating">
            <a class="tooltip" title="Open IMDB for <?php echo $movie->name ?>"
               href="http://www.imdb.com/title/<?php echo $movie->imdb_id ?>/" target="_blank"><span
                    class="imdbRatingPlugin" data-user="ur49068862" data-title="<?php echo $movie->imdb_id ?>"
                    data-style="p4"></span></a>
        </div>
    </div>
    <?php
}
        