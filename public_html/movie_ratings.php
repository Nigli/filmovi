<?php
if (isset($_GET['list']) && ($_GET['list']) != 0) {
    $user_id = $_GET['list'];
    if (null !== (Movierankings::GetTop10FromMovieRankByUserId($user_id))) {
        foreach (Movierankings::GetTop10FromMovieRankByUserId($user_id) as $k => $movierank) {
            ?>
            <div class="row">
                <div class="title"><?php echo Listafilmova::GetMovieNameByIMDBId($movierank->imdb_id) ?></div>
                <div class="result"><?php echo $movierank->sumrating ?></div>
            </div>
            <?php
        }
    } else {
        ?>
        <div class="row">
            <div class="title">User haven't voted yet</div>
        </div>
        <?php
    }
} else {
    foreach (Movierankings::GetTop10FromMovieRank() as $k => $movierank) {
        ?>
        <div class="row">
            <div class="title"><?php echo Listafilmova::GetMovieNameByIMDBId($movierank->imdb_id) ?></div>
            <div class="result"><?php echo $movierank->sumrating ?></div>
        </div>
        <?php
    }
}