<!-- used in pages/results.php-->

<form action="" method="get" id="list" >
    <select name="list" id="dropdown" class="select">
        <option value="-1" selected="">Choose user</option>
        <?php foreach (Users::GetAllFromUsers() as $k=>$user) {
        ?>            
        <option value="<?php echo $user->id ?>"><?php echo $user->name ?></option>
        <?php
        }
        ?>
        <option value="all">Total results</option>
    </select>
<!--    <input class="submit" type="submit" name="submit" id="rezultati" value="OK"/>-->
</form>