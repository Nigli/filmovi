<?php
    while ($res=mysqli_fetch_assoc($listaFilmovaQ)){
    ?>
    <div class="row">
        <div class="icon tooltip_img" title="<img width='100%' height='100%' src='<?php echo $res['poster']?>'/><strong>Movie title:</strong> <?php echo $res['name']?><br><strong>Movie release:</strong> <?php echo $res['year']?><br><strong>Duration:</strong> <?php echo $res['runtime']?><br><strong>Director:</strong> <?php echo $res['director']?><br><strong>Actors:</strong> <?php echo $res['actors']?>"></div>
        <div class="title"><?php echo $res['name']?></div>
        <select class="rating_vote" name="<?php echo $res['imdb_id']?>">
            <?php 
                for($i=0;$i<=10;$i++){?>
                    <option value="<?php echo $i?>"><?php echo $i ?></option>
                <?php }
            ?>
        </select>
        <?php
            $youtube_id=$res['youtube_id'];
            $movie_name=$res['name'];
            echo "<button class='trailer tooltip' title='Open trailer for {$movie_name}' type='button' onclick='atributeChange(\"{$youtube_id}\")'>Trailer</button>";
        ?>
        <div class="imdb_rating">
            <a class="tooltip" title="Open IMDB for <?php echo $res['name']?>" href="http://www.imdb.com/title/<?php echo $res['imdb_id']?>/" target="_blank"><span class="imdbRatingPlugin" data-user="ur49068862" data-title="<?php echo $res['imdb_id']?>" data-style="p4"></span></a>
        </div>
    </div>
<?php
}
        