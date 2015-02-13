<?php 
require 'function.php';
if (isset($_GET['user'])) {
$user_id = $_GET['user'];}
?>
<html>
    <head>
        <?php include 'head.php'; ?>
    </head>
    <body>
        <header>
        </header>
        <div id="wrapper">            
            <nav>
                <a href="pocetna.php">Početna strana</a>
                <h1>Ovo su rezultati glasanja</h1>
                <a href="results.php?user=1">Vidi samo rezultate za korisnika <?php echo user_name_by_id($conn,1)?></a><br>
                <a href="results.php?user=2">Vidi samo rezultate za korisnika <?php echo user_name_by_id($conn,2)?></a><br>
                <a href="results.php?user=3">Vidi samo rezultate za korisnika <?php echo user_name_by_id($conn,3)?></a><br>
                <a href="results.php">Vidi ukupne rezultate</a>
            </nav>
            <div class="main">
                <div class="row_title">
                    <div class="title">Ime filma</div>
                    <div class="result">Ocena</div>
                </div>
                <?php
                if (isset($_GET['user'])) {
                    $user_id = $_GET['user'];
                    //ratings list query for specific user
                    $resultsuser = mysqli_query($conn, "SELECT id, imdb_id, user_id, SUM(rating) as sumrating, date FROM movie_rankings WHERE user_id='$user_id' GROUP BY imdb_id ORDER BY sumrating DESC limit 10");

                    while ($res=mysqli_fetch_assoc($resultsuser)) {
                        $imdb_id=$res['imdb_id'];
                        $upit="SELECT * FROM listafilmova WHERE imdb_id='$imdb_id'";
                        $movies = mysqli_query($conn,$upit);
                        while ($movie = mysqli_fetch_assoc($movies)) {
                            if(!empty($movie['name'])){
                            ?>
                                <div class="row">
                                    <div class="title"><?php echo $movie['name']?></div>
                                    <div class="result"><?php echo $res['sumrating']?></div>
                                </div>
                            <?php } else {
                            ?>
                                <div class="row">
                                    <div class="title">Nema rezultata</div>                                    
                                </div>
                            <?php
                            }                                 
                        }
                    }
                }else {
                    //ratings list query for all users
                    $results = mysqli_query($conn, "SELECT id, imdb_id, user_id, SUM(rating) as sumrating, date FROM movie_rankings GROUP BY imdb_id ORDER BY sumrating DESC limit 10");

                    while ($res=mysqli_fetch_assoc($results)) {
                        $imdb_id=$res['imdb_id'];
                        $upit="SELECT * FROM listafilmova WHERE imdb_id='$imdb_id'";
                        $movies = mysqli_query($conn,$upit);
                        while ($movie = mysqli_fetch_assoc($movies)) {                            
                            ?>
                                <div class="row">
                                    <div class="title"><?php echo $movie['name']?></div>
                                    <div class="result"><?php echo $res['sumrating']?></div>
                                </div>
                            <?php                                                             
                        }
                    }
                }
                ?>
            </div>
        </div>
        <footer></footer>
    </body>
</html>
