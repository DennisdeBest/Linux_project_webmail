<?php

$sysDirs = array(".", "..", "bash", "Webmail", "index.php", "plugins", ".gitignore", "aquota.user");

$hosts = scandir('/var/www/html/vHosts/');


foreach ($hosts as $host){
    if(!in_array($host, $sysDirs))
        $hostArray[]=$host;
}
echo "<table>";
foreach ($hostArray as $vhost){

    echo "<form class='delete' method='post' action='delvHost.php'>";
    echo "<tr>";
    echo "<th><label>".$vhost."</label></th>";
    echo "<input type='hidden' name='vhost' value='".$vhost."'/>";
    echo "<td><input class='deleteButton' type='submit' value='✘'/></td>";
    echo "</tr>";
    echo "</form>";
}
echo "</table>"
?>