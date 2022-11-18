<?php
    <script type="text/javascript" src="script/script.js">
    $title = 'Index'; 

    //require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 


?>

<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

<form>
    <div class="inputBox">
        <input type="email" name="email" value="" placeholder="Email or phone">
    </div>
    <div class="inputBox">
        <input type="password" name="email" value="" placeholder="Password">
    </div>
    
    <div class = "SignInButton">
        <input type="submit" name="sign-in" value="Sign In">
    </div>
</form> 

