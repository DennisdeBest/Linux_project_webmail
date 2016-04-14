<?php
session_start();
$_SESSION['output'] = "";
$_SESSION['error'] = "";
$_SESSION['info'] = "";


if((!empty($_POST['username']))&&!empty($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $script1 = "echo \"$username:$password\" | sudo chpasswd -e";
    $script2 = "echo \"$username:$password\" | sudo chpasswd ";
    $_SESSION['output'] = $script1;
    $_SESSION['output'].=shell_exec($script1);
    $_SESSION['output'].=shell_exec($script2);

    header("Location:http://".$_SERVER['HTTP_HOST'].$_SESSION['referrer']);
}
