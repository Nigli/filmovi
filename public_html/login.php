<div class="main">
    <form action="glasanje.php" method="post" id="logovanje" >
        <select name="logovanje" id="dropdown" class="select" >
            <option value="-1" selected="">Izaberite korisnika</option>
            <?php while ($user=mysqli_fetch_assoc($userList)) {
            ?>            
            <option value="<?php echo $user['id'] ?>"><?php echo $user['name'] ?></option>
            <?php
            }
            ?>
            <option value="admin">Admin</option>
        </select>
        <input class="password" type="password" name="password" id="password" placeholder="Upišite šifru"/>
        <input class="submit" type="submit" name="login" id="login" value="OK"/>
    </form>
</div>
