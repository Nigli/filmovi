<!--used for pages/admin.php-->

<?php require 'config.php';
if (isset($_POST['delete'])) {
    $name = $_POST['name'];
    Users::DeleteUser($name);
}
redirect_to('pages/admin.php');