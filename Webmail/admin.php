<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projet Linux</title>
    <link rel="stylesheet" type="text/css" href="css.css"/>
    <?php session_start();
    $_SESSION['referer'] = $_SERVER["REQUEST_URI"];
    ?>
</head>
<body>
<div id="flexContainer">
    <nav><ul>
            <li></li>
            <li><a href="home">Home</a></li>
            <li><a href="squirrelmail">Webmail</a></li>
            <li><a href="admin">Admin</a></li>
        </ul></nav>
    <div id="content">
    <form action="addUser.php" method="POST">
        <table>
       <tr>
           <th><label>Username : </label></th>
           <td><input type="text" id="username" name="username" /></td>
       </tr>
        <tr>
            <th><label>Password : </label></th>
            <td><input type="password" id="pass1" name="pass1"/></td>
        </tr>
        <tr>
       <th><label>Repeat password : </label></th>
        <td><input type="password" id="pass2" name="pass2"></td>
        <tr>
        <td><input type="submit" value="Add User"></td>
        </tr>
        </table>
    </form>

        <?php
        echo "Output : ";
        if(isset( $_SESSION['output']))
            echo $_SESSION['output'];
        echo "<br/>";
        echo "Errors : ";
            if(isset( $_SESSION['error']))
        echo $_SESSION['error'];
?>

    <div id="listUsers">
        <?php require("listUsers.php"); ?>
    </div>
    </div>
</div>

</body>
</html>
