<?php
if (isset($_GET['user'])) {
    $user_id = $_GET['user'];
    if(null !== (Movierankings::GetTop10FromMovieRankByUserId($user_id))){
        foreach(Movierankings::GetTop10FromMovieRankByUserId($user_id) as $k=>$movierank){        
            foreach (Listafilmova::GetAllFromMoviesByIMDBId($movierank->imdb_id) as $m=>$movie){            
                ?>
                <div class="row">
                    <div class="title"><?php echo $movie->name?></div>
                    <div class="result"><?php echo $movierank->sumrating?></div>
                </div>
                <?php            
            }        
        }
    }else {
        ?>
        <div class="row">
            <div class="title">Korisnik nije glasao</div>
        </div>
        <?php
    }
}else {
    foreach(Movierankings::GetTop10FromMovieRank() as $k=>$movierank){
        foreach(Listafilmova::GetAllFromMoviesByIMDBId($movierank->imdb_id) as $m=>$movie){
            ?>
            <div class="row">
                <div class="title"><?php echo $movie->name?></div>
                <div class="result"><?php echo $movierank->sumrating?></div>
            </div>
            <?php        
        }
    }
}