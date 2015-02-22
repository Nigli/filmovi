<?php require 'function.php';
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    //deleting user    
    $upit="DELETE FROM users WHERE id='$id'";
    $deleteUser = mysqli_query($conn,$upit);
}
redirect_to('admin.php');