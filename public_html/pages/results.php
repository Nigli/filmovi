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
                <a class="tooltip_home" title="Go to homepage" href="pocetna.php"><i class="fa fa-home fa-3x"></i></a>
            </nav>
            <div class="main">                
                <?php include '../user_ratings.php' ?>
                <?php include "../movie_ratings.php" ?>
            </div>
        </div>
        <footer></footer>
    </body>
</html>
