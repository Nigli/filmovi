<?php
require '../config.php';
if(isset($_POST['user'])){   
    $user_id = $_POST["user"];
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
                <a class="tooltip_home" title="Go to homepage" href="pocetna.php"><i class="fa fa-home fa-3x"></i></a>
                <span class="hello">Hello <?php echo Users::GetUserNameById($user_id) ?>, vote for movies</span>
            </nav>
            <div class="shade"></div>
            <?php include '../youtube_player.php'; ?>
            <div class="main">
                <form action="../ratings_insert.php" method="post" id="glasanje">
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>"/>
                    <?php include '../movie_list_user.php' ?>            
                    <div class="submits">
                        <input type="submit" name="submit" id="submit" value="Vote"/>
                        <input type="reset" name="reset" id="reset" value="Reset"/>
                    </div>
                </form>
            </div>
        </div>
        <footer></footer>  
    </body>
</html>