<?php require 'function.php';
if(isset($_POST['name'])){
    $name=$_POST['name'];
    //adding user 
    $upit="INSERT INTO users (name) VALUES('$name')";
    $insertUser = mysqli_query($conn,$upit);
}
redirect_to('pages/admin.php');