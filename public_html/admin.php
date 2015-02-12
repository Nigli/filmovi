<?php require 'function.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Filmovi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="js/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.dropdown.js"></script>
        <script type="text/javascript" src="js/func.js"></script>
        <script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,'script','imdb-rating-api');</script>
        <link rel="stylesheet" type="text/css" href="css/user_menu.css" />        
        <link href="css/style.css" type="text/css" rel="stylesheet"> 
    </head>
    <body>
        <div id="wrapper"> 
            <header></header>
            <a href="pocetna.php">Pocetna strana</a>
            <h1>Zdravo Admine!</h1>
            <div class="main">
                <?php            
                include 'user_list.php';
                include 'movie_list_admin.php';            
                ?>
            </div>
            <footer></footer>
        </div>
    </body>
</html>