<!-- <script src="script\jquery.js"></script>
<script src=script\script.js></script> -->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

<?php
    $title = 'Index'; 

    //require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
?>

<form>    
    <?php include ("db/access_site_query.php"); ?>
</form>

<form method="post" action="db/sign_in_query.php">
    <div class="inputBox">
        <input type="email" name="email" placeholder="Email or phone">
    </div>

    <div class="inputBox">
        <input type="password" name="password" placeholder="Password">
    </div>

    <div id = "sign_in_button_div" >
        <input type="submit" id = "sign_in_button" name="sign_in_button" value="sign in"/> 
    </div>
</form>

<a href="db/investigate_site.php">Help</a> 
<a href="db/investigate_site.php">Privacy</a> 
<a href="db/investigate_site.php">Terms</a> 