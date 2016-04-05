<?php
if(isset($_POST['username']))
    $username = $_POST['username'];
if(isset($_POST['pass1']) && isset($_POST['pass2'])){
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if ($pass1 == $pass2)
        $finalPass = $pass1;
    else
        echo "Error passwords do not match";
}
else
    $finalPass = "password";

