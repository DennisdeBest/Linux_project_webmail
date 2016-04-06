<?php
session_start();
$_SESSION['output'] = "";
$_SESSION['error'] = "";

if(!empty($_POST['username']))
    $username = $_POST['username'];
if(!empty($_POST['pass1']) && !empty($_POST['pass2'])){
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if ($pass1 == $pass2)
        $finalPass = $pass1;
    else
        $_SESSION['error'].= "Error passwords do not match <br/>";
}
else{
    $_SESSION['error'].= "No passwords set using \"password\" as default<br/>";
    $finalPass = "password";
}


$script = "/var/www/html/Webmail/bash/addUser "."-u ".$username." -p ".$finalPass;
shell_exec($script);

$_SESSION['output'] .= shell_exec('listusers');
$_SESSION['output'] = $script;
header("Location:http://".$_SERVER['HTTP_HOST'].$_SESSION['referer']);
