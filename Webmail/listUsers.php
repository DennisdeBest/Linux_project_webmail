<?php

$sysDirs = array(".", "..", "bash", "Webmail", "index.php", "plugins", ".gitignore");

$dirs = scandir('/var/www/html');


foreach ($dirs as $dir){
    if(!in_array($dir, $sysDirs))
        $dirsArray[]=$dir;
}
echo "<table>";
foreach ($dirsArray as $user){

    echo "<form class='usersform' method='post' action='delmailuser.php'>";
    echo "<tr>";
    echo "<th><label>".$user."</label></th>";
    echo "<input type='hidden' name='username' value='".$user."'/>";
    echo "<td><input type='submit' value='✘'/></td>";
    echo "</tr>";
    echo "</form>";
}
echo "</table>"
?>