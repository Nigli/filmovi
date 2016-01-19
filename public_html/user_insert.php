<!--used for pages/admin.php-->

<?php require 'config.php';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    //adding user
    Users::InsertUser($name);
}
redirect_to('pages/admin.php');