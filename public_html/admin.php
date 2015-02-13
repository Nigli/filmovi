<?php require 'function.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php'; ?>
    </head>
    <body>
        <header>
        </header>
        <div id="wrapper">            
            <nav>
                <a href="pocetna.php">Pocetna strana</a>
                <h1>Zdravo Admine!</h1>
            </nav>
            <div class="main">
                <?php            
                include 'user_list.php';
                include 'movie_list_admin.php';            
                ?>
            </div>            
        </div>
        <footer></footer>
    </body>
</html>