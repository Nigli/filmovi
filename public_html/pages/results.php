<?php 
require '../config.php';
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
                <span class="hello"><?php echo isset($_GET['list'])&&$_GET['list']!=0?Users::GetUserNameById($_GET['list'])."'s":"All" ?> votes</span>
            </nav>
            <div class="main">                
                <?php include '../user_ratings.php' ?>
                <?php include "../movie_ratings.php" ?>
            </div>
        </div>
        <footer></footer>
    </body>
</html>
