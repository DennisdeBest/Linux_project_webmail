<?php

$sysDirs = array(".", "..", "bash", "Webmail", "index.php", "plugins");

$dirs = scandir('/var/www/html');


foreach ($dirs as $dir){
    if(!in_array($dir, $sysDirs))
        $dirsArray[]=$dir;
}
echo "<table>";
foreach ($dirsArray as $user){

    echo "<form class='usersform' method='post' action='delUser.php'>";
    echo "<tr>";
    echo "<th><label>".$user."</label></th>";
    echo "<input type='hidden' name='username' value='".$user."'/>";
    echo "<td><input type='submit' value='✘'/></td>";
    echo "</tr>";
    echo "</form>";
}
echo "</table>"
?>