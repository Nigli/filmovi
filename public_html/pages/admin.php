<?php require '../config.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include '../head.php'; ?>
    </head>
    <body>
        <header>
        </header>                
        <div class="spinner"></div>
        <div id="wrapper">            
            <nav>
                <a class="tooltip_home" title="Go to homepage" href="pocetna.php"><i class="fa fa-home fa-3x"></i></a>
                <span class="hello">Zdravo Admine!</span>
            </nav>
            <div id="shade" class="shade"></div>
            <div class="main">
                <?php            
                include '../user_list.php';
                include '../movie_list_admin.php';            
                ?>
            </div>            
        </div>
        <footer></footer>
    </body>
</html>