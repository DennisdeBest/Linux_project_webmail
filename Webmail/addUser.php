<?php
session_start();
$_SESSION['output'] = "";
$_SESSION['error'] = "";
$_SESSION['info'] = "";

if(!empty($_POST['username']))
    $username = $_POST['username'];
if(!empty($_POST['pass1']) && !empty($_POST['pass2'])){
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if ($pass1 == $pass2)
        $finalPass = $pass1;
    else
        $_SESSION['error'].= "Error passwords do not match";
}
else{
    $_SESSION['info'].= "No passwords set using \"password\" as default";
    $finalPass = "password";
}


$script = "/var/www/html/Webmail/bash/addmailuser "."-u ".$username." -p ".$finalPass;
if(empty($_SESSION['error'])){
    shell_exec($script);
    $_SESSION['output'] = $script;
}

header("Location:http://".$_SERVER['HTTP_HOST'].$_SESSION['referrer']);
