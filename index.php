<script src="script\jquery.js"></script>
<script src=script\script.js></script>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

<?php
    $title = 'Index'; 

    //require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
?>

<form>
    <div class="inputBox">
        <input type="email" name="email" value="" placeholder="Email or phone">
    </div>

    <div class="inputBox">
        <input type="password" name="email" value="" placeholder="Password">
    </div>

    <div id = "sign_in_button_div" >
        <input id = "sign_in_button" type="button" name="sign_in_button" value="sign in"/> 
    </div>
</form>