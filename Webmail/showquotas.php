<?php
session_start();
$_SESSION['quotas'] ="";
$script = "sudo repquota -a";
$_SESSION['quotas'].=nl2br(shell_exec($script));

header("Location:http://".$_SERVER['HTTP_HOST'].$_SESSION['referrer']);
?>