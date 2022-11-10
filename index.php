<?php
    $title = 'Index'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
?>


<form>
    <div class="inputBox">
        <input type="email" name="email" value="">
        <label>Username</label>
    </div>
    <div class="inputBox">
            <input type="text" name="text" value="">
            <label>Password</label>
        </div>
    <input type="submit" name="sign-in" value="Sign In">
</form>
    
