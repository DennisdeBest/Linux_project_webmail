<?php
session_start();
$_SESSION['output'] = "";
$_SESSION['error'] = "";
$_SESSION['info'] = "";

if(!empty($_POST['servername']))
    $servername = $_POST['servername'];
if(!empty($_POST['email']))
    $email = $_POST['email'];
else
    $email = "admin@toto.com   ";

$script = "/var/www/html/Webmail/bash/addvhost "."-n ".$servername." -e ".$email;
if(empty($_SESSION['error'])){
    shell_exec($script);
    $_SESSION['output'] = $script;
}

header("Location:http://".$_SERVER['HTTP_HOST'].$_SESSION['referrer']);
