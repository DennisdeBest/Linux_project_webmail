<?php
$root = __DIR__;

echo $root;

$sysDirs = array(".", "..", "bash", "Webmail", "index.php", "plugins");

$dirs = scandir('/var/www/html');


foreach ($dirs as $dir){
    if(!in_array($dir, $sysDirs))
        $dirsArray[]=$dir;
}
foreach ($dirsArray as $user){
    echo "<form class='usersform' method='post' action='delUser.php'>";
    echo "<label>".$user."</label>";
    echo "<input type='hidden' name='username' value='".$user."'/>";
    echo "<input type='submit' value='Delete User'/>";
    echo "</form>";
}

?>