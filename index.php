<?php
    
    $title = 'Index'; 

    //require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 


?>

<script type="text/javascript">
    document.getElementById('sign_in_button').onclick = function() {
        alert("button was clicked");
    };
</script>

<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

<form>
    <div class="inputBox">
        <input type="email" name="email" value="" placeholder="Email or phone">
    </div>
    <div class="inputBox">
        <input type="password" name="email" value="" placeholder="Password">
    </div>
    
    <div class = "SignInButton">
        <input id = "sign_in_button" type="submit" name="sign_in_button" value="enter"/>
    </div>
</form> 

