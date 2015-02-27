<!-- used in pages/pocetna.php -->

<form action="glasanje.php" method="post" id="form" >
    <select name="user" id="dropdown" class="select" >
        <option value="-1" selected="">Izaberite korisnika</option>
        <?php foreach (Users::GetAllFromUsers() as $k=>$user) {
        ?>            
        <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
        <?php
        }
        ?>
        <option value="admin">Admin</option>
    </select>
    <input class="password" type="password" name="password" id="password" placeholder="Insert Password"/>
    <input class="submit" type="submit" name="login" id="login" value="OK"/>
</form>
