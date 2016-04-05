
<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projet Linux</title>
    <link rel="stylesheet" type="text/css" href="css.css"/>
</head>
<body>
<div id="flexContainer">
    <nav><ul>
            <li></li>
            <li><a href="home">Home</a></li>
            <li><a href="squirrelmail">Webmail</a></li>
            <li><a href="admin">Admin</a></li>
        </ul></nav>
    <div id="content"><h1><?php
            $output = shell_exec('ls -lart');
            echo "<pre>$output</pre>";
            ?></h1>

    <form action="addUser.php" method="POST">
        <label>Username : </label>
        <input type="text" id="username"/><br/>
        <label>Password : </label>
        <input type="password" id="pass1"/><br/>
        <label>Repeat password : </label>
        <input type="password" id="pass2">
        <input type="submit" value="Add User">
    </form> </div>
</div>

</body>
</html>