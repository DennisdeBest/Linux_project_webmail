<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projet Linux</title>
    <link rel="stylesheet" type="text/css" href="css.css"/>
    <?php
    require_once ("login/check_login.php");
    session_start();
    
    $_SESSION['referrer'] = $_SERVER["REQUEST_URI"];
    ?>
</head>
<body>
<div id="flexContainer">
    <nav><ul>
            <li></li>
            <li><a href="/index.php">Home</a></li>
            <li><a href="/squirrelmail">Webmail</a></li>
            <li><a href="/Webmail/admin.php">Admin</a></li>
        </ul></nav>
    <div id="content">
        <div id="adduser">
            <h2>Add users</h2>
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
        </div>
        <div id="addvHost">
            <h2>Add vHost</h2>
            <form action="addvHost.php" method="POST">
                <table>
                    <tr>
                        <th><label>Servername : </label></th>
                        <td><input type="text" id="servername" name="servername" /></td>
                    </tr>
                    <tr>
                        <th><label>Email : </label></th>
                        <td><input type="text" id="email" name="email"/></td>
                    </tr>
                        <td><input type="submit" value="Add vHost"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="userQuotas">
            <h2>Quotas</h2>
            <form method="post" action="showquotas.php">
                <input type="submit" value="Refresh"/>
            </form>
            <?php
            if(isset( $_SESSION['quotas']))
            echo $_SESSION['quotas'];
            ?>
        </div>

        <div id="showvHosts">
            <h2>vHosts</h2>
            <?php include("listvHosts.php"); ?>
        </div>

        <div id="listUsers">
            <h2>Delete users</h2>
            <?php require("listUsers.php"); ?>
        </div>

        <div id="phpinfo">
            <h2>PHP return information</h2>
            <?php
            echo "Output : ";
            if(isset( $_SESSION['output']))
                echo $_SESSION['output'];
            echo "<br/>";
            echo "Info : ";
            if(isset( $_SESSION['info']))
                echo $_SESSION['info'];
            echo "<br/>";
            echo "Errors : <span class='error'>";
            if(isset( $_SESSION['error']))
                echo $_SESSION['error'];
            echo "</span>";
            ?>
        </div>
    </div>
</div>

</body>
</html>
