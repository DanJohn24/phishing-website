<?php
    $title = 'Index'; 

    //require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $( "#sign_in_button" ).click(function() {
        alert( "Handler for .click() called.");
    });
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
        <input id = "sign_in_button" type="submit" name="sign_in_button" value="sign in"/>
    </div>
</form> 