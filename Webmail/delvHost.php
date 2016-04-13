<?php
session_start();
$_SESSION['output'] = "";
$_SESSION['error'] = "";

if(!empty($_POST['vhost'])){
    $vhost = $_POST['vhost'];
    $script = "/var/www/html/Webmail/bash/delvHost ".$vhost;
    shell_exec($script);

    header("Location:http://".$_SERVER['HTTP_HOST'].$_SESSION['referrer']);
}
