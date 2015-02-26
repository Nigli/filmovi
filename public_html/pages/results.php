<?php 
require '../config.php';
if (isset($_GET['user'])) {
$user_id = $_GET['user'];}
?>
<html>
    <head>
        <?php include '../head.php'; ?>
    </head>
    <body>
        <header>
        </header>
        <div id="wrapper">            
            <nav>
                <a href="pocetna.php">Home page</a>                
<!--                <a href="results.php?user=1">Vidi samo rezultate za korisnika <?php echo Users::GetUserNameById(1)?></a><br>
                <a href="results.php?user=2">Vidi samo rezultate za korisnika <?php echo Users::GetUserNameById(2)?></a><br>
                <a href="results.php?user=3">Vidi samo rezultate za korisnika <?php echo Users::GetUserNameById(3)?></a><br>
                <a href="results.php">Vidi ukupne rezultate</a>-->
            </nav>
            <div class="main">
                <?php include"../user_ratings.php" ?>
                <div class="row_title">
                    <div class="title">Movie name</div>
                    <div class="result">Rating</div>
                </div>
                <?php include "../movie_ratings.php" ?>
            </div>
        </div>
        <footer></footer>
    </body>
</html>
