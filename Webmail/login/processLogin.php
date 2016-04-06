<?php
session_start();
if($_POST['username'] == "admin" && $_POST['pass1'] == "admin"){
    $_SESSION['auth'] = "ok";
    header("Location:http://".$_SERVER['HTTP_HOST']."/Webmail/admin.php");
}

else
    $_SESSION['auth'] = "";

?>