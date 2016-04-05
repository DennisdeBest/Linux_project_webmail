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


$script = "sudo /var/www/html/bash/addUser "."-u ".$username." -p ".$finalPass;

$output = shell_exec($script);
//$output = shell_exec("/var/www/html/bash/addUser -u userTestAgain -p pass");
echo "<pre>$output</pre>";

echo "<strong>$script</strong>";
