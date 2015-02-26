<?php
    if ((isset($_GET['user']))&&(is_numeric($_GET['user']))) {
    $user_id = $_GET['user'];    
    echo "<span id='selected_user'>".Users::GetUserNameById($user_id)."'s votes</span>";
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
            <div class="title">User haven't voted yet</div>
        </div>
        <?php
    }
}else {
    echo "<span id='selected_user'>Total results</span>";
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