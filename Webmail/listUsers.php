<?php

$sysDirs = array(".", "..", "bash", "Webmail", "index.php", "plugins", ".gitignore", "aquota.user");

$dirs = scandir('/mnt/disk/');


foreach ($dirs as $dir){
    if(!in_array($dir, $sysDirs))
        $dirsArray[]=$dir;
}
echo "<table>";
foreach ($dirsArray as $user){

    echo "<form class='delete' method='post' action='delUser.php'>";
    echo "<tr>";
    echo "<th><label>".$user."</label></th>";
    echo "<input type='hidden' name='username' value='".$user."'/>";
    echo "<td><input class='deleteButton' type='submit' value='✘'/></td>";
    echo "</form>";
    echo "<form class='changepass' method='post' action='changepass.php'>";
    echo "<th><label for='pass'/>Password </label></th>";
    echo "<td><input type='input' id='password' name='password'/></td>";
    echo "<input type='hidden' name='username' value='".$user."'/>";
    echo "<td><input class='changepassButton' type='submit' value='Change Pass'/></td>";
    echo "</tr>";
    echo "</form>";

}
echo "</table>"
?>