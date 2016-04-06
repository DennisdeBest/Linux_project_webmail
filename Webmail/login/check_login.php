
    <?php session_start();
    if($_SESSION['auth'] != "ok")
        header("Location:http://".$_SERVER['HTTP_HOST']."/Webmail/login/loginForm.php");
    ?>

