<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}
?>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <h2>Welcome! you are successfully logged in.</h2>
        <p>Here are your login details</p>
        <ul> Your username is : <?php echo $_SESSION['username'] ?></ul>
        <ul> Your password is : <?php echo $_SESSION['password'] ?></ul>
    
    </body>
</html>