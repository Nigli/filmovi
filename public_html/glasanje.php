<?php
require 'function.php';
if(isset($_POST['logovanje'])){   
    $user_id = $_POST["logovanje"];
        if ($user_id=='admin') {
            redirect_to('admin.php');
        }elseif($user_id==-1){
            redirect_to('pocetna.php');
        }else {            
        }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Filmovi za glasanje</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <!-- css and js for dropdown menu -->
        <script src="js/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.dropdown.js"></script>
        <script src="js/jquery.dropdown.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/func.js"></script>
        <script type="text/javascript" src="js/youtube_iframe.js"></script>
        <script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="http://g-ec2.images-amazon.com/images/G/01/imdb/plugins/rating/js/rating.min.js";stags.parentNode.insertBefore(js,stags);})(document,'script','imdb-rating-api');</script>      
        <link rel="stylesheet" type="text/css" href="css/user_menu.css" />        
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
        <script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>
    </head>
    <body>
        <div id="wrapper">   
            <header></header>
            <div class="shade"></div>
            <a href="pocetna.php">Početna strana</a>
            <h1>Zdravo, <?php echo user_name_by_id($conn,$user_id) ?> glasaj za filmove</h1>            
            <div class="player">
                    <iframe id="ytplayer" width="720" height="405" frameborder="0" allowfullscreen></iframe>
                    <button class="trailer_stop_button" onclick="stopVideo()" type="button">Close</button>
            </div>
            <div class="main">
                <form action="ratings_insert.php" method="post" id="glasanje">
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>"/>
                    <?php include 'movie_list_user.php' ?>            
                    <div class="submits">
                        <input type="submit" name="submit" id="submit" value="Glasaj"/>
                        <input type="reset" name="reset" id="reset" value="Resetuj unos"/>
                    </div>
                </form>
            </div>
            <footer></footer>
        </div>        
    </body>
</html>