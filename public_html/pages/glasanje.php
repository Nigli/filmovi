<?php
require '../config.php';
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
        <?php include '../head.php'; ?>
    </head>
    <body>
        <header>
        </header> 
        <div id="wrapper">
            <nav>
                <a href="pocetna.php">Početna strana</a>
                <h1>Zdravo, <?php echo Users::GetUserNameById($user_id) ?> glasaj za filmove</h1>
            </nav>
            <div class="shade"></div>
            <?php include '../youtube_player.php'; ?>
            <div class="main">
                <form action="../ratings_insert.php" method="post" id="glasanje">
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>"/>
                    <?php include '../movie_list_user.php' ?>            
                    <div class="submits">
                        <input type="submit" name="submit" id="submit" value="Glasaj"/>
                        <input type="reset" name="reset" id="reset" value="Resetuj unos"/>
                    </div>
                </form>
            </div>
        </div>
        <footer></footer>  
    </body>
</html>