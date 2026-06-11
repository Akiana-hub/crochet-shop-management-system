<!DOCTYPE html>
<html>
<head>
    <title>Basic Login Page</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST">

    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" value="Login">

</form>

<?php

if(isset($_POST['username']) && isset($_POST['password'])){

    $username = trim($_POST['username']);
$password = trim($_POST['password']);


    include("db_connect.php");

    $sql = "SELECT * FROM users
            WHERE username='$username'
            AND password='$password'";

            echo "<br>SQL Query:<br>";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        echo "<h3 style='color:green;'>Login Successful</h3>";

    } else {

        echo "<h3 style='color:red;'>Invalid Username or Password</h3>";

    }
}

?>

</body>
</html>