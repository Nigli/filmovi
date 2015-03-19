<?php 
    require_once '../config.php';
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
            <div class="main">
<!--            xxxxxxx   -->
<!--            xxxxxxx   -->
<!--            xxxxxxx   -->

<!--            Setup     -->
                <span class="hello">Registration</span>
                <form action="" method="post" id="formregistration" >
                    <input class="user visible" type="text" name="adminG" id="adminG" placeholder="Add Your Username"/>
                    <input class="user visible" type="text" name="group" id="group" placeholder="Add Your Group Name"/>
                    <input class="user visible" type="text" name="member" id="member" placeholder="Add Member"/>
                    <button>Add more memers</button>
                    <input class="submit visible" type="submit" name="registration" id="registration" value="Submit"/>
                    If you have changed the Popcorntime database settings browse the file location.
                    If not, leave it as it is. DON'T UPLOAD ANYTHING :)
                    <input type="file">
                </form>
                <?php print_r($_POST)?>
<!--            xxxxxxx   -->
<!--            xxxxxxx   -->
<!--            xxxxxxx   -->
            </div>
        </div>
        <footer></footer>
    </body>
</html>