<?php
session_start();
$_SESSION['output'] = "";
$_SESSION['error'] = "";

if(!empty($_POST['username'])){
    $username = $_POST['username'];
    $script = "/var/www/html/Webmail/bash/delUser ".$username;
    shell_exec($script);

    header("Location:http://".$_SERVER['HTTP_HOST'].$_SESSION['referer']);
}
