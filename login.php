<?php
$login = false;
include 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "Select * from login where username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num==1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location: welcome.php");     
}
else{
    echo "Invalid credentials";
}
}
?>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body align="center">
        <p>First made the account, <a href="./signup.php">signup</a> </p>
        <h2>Login</h2>
        <form action="./login.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required><br><br>
            <label for="password">Password</label>
            <input type="text" name="password" id="password" required><br><br>
            <button type="submit">Login</button>
           
        </form>
    </body>
</html>