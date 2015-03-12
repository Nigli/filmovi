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

<!--            Login     -->
                <span class="hello">Login</span>
                <form action="" method="post" id="formlogin" >
                    <input class="user visible" type="text" name="user" id="user" placeholder="Username or Email"/>                    
                    <input class="password visible" type="password" name="password" id="password" placeholder="Password"/>
                    <input class="submit visible" type="submit" name="login" id="login" value="OK"/>
                </form>
                
<!--            Register  -->
                <span class="hello">Register</span>
                <form action="" method="post" id="formregister" >
                    <input class="user visible" type="text" name="userReg" id="userReg" placeholder="Email"/>                    
                    <input class="password visible" type="password" name="passwordReg" id="passwordReg" placeholder="Password"/>
                    <input class="password visible" type="password" name="passwordRegCon" id="passwordRegCon" placeholder="Confirm Password"/>
                    <input class="submit visible" type="submit" name="register" id="register" value="OK"/>
                </form>

<!--            xxxxxxx   -->
<!--            xxxxxxx   -->
<!--            xxxxxxx   -->
            </div>
        </div>
        <footer></footer>
    </body>
</html>