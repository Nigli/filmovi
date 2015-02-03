<h3>Unesi novog korisnika</h3>
<form class="user_insert" action="<?php echo "user_insert.php"; ?>" method="post">
    <input class="user_name" type="text" name="name" id="user_name" value="" placeholder="Ime korisnika">
    <input class="user_submit" type="submit" name="submit" onClick="return confirm('Uneti novog korisnika?')" value="unesi">
</form>    
<h3>Ovo je trenutna lista korisnika</h3>
<?php 
    while ($user=mysqli_fetch_assoc($userList)){
    ?>
    <form class="raw_user" action="user_delete.php" method="post">
        <input class="user_name" type="text" readonly="" name="name" value="<?php echo $user['name']?>" />
<!--            <input class="user_submit" type="submit" name="change" value="izmeni" />-->
        <input class="user_submit" type="submit" name="delete" onClick="return confirm('Obrisati korisnika <?php echo $user['name']?>?');" value="obriši" />
    </form>
    <?php
    }
