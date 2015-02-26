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
            </nav>
            <div class="main">
                <?php include"../user_ratings.php" ?>
                <?php include "../movie_ratings.php" ?>
            </div>
        </div>
        <footer></footer>
    </body>
</html>
