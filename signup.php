<?php

include 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"];

if($name!=NULL && $email!=NULL && $username!=NULL && $password!=NULL && $mobile!=NULL && $gender!=NULL )
{
    $sql = "INSERT INTO `login` (`id`, `Full name`, `Email`, `Mobile no.`,`gender`,`username`, `password`, `created_at`)
    VALUES (NULL, '$name', '$email', '$mobile', '$gender', '$username', '$password', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    header("location: login.php");
}
else
{
    echo "Please enter all details";
}
}
?>
<html>
    <head>
        <title>Signup</title>
    </head>
    <body align="center">
        <h2>Signup</h2>
        <form action="./signup.php" method="post">
            <label for="name">Full name</label>
            <input type="text" name="name" id="name" required><br><br>
            <label for="email">Email ID</label>
            <input type="email" name="email" id="email" required><br><br>
            <label for="mobile">Mobile no.</label>
            <input type="number" name="mobile" id="mobile" required><br><br>
            <label for="gender">Gender:</label>
            <label for="male">Male</label>
            <input type="radio" name="gender" value="male" id="male">
            <label for="female">Female</label>
            <input type="radio" name="gender" value="female" id="female"><br><br>
            <label for="username">Username</label>
            <input type="text" name="username" id="" required><br><br>
            <label for="password">Password</label>
            <input type="text" name="password" id="" required><br><br>
            <button type="submit">Signup</button>
            <p>If you made your account, <a href="./login.php">login</a> </p>
        </form>
    </body>
</html>