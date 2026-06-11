<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Welcome Page</title>
</head>
<body>

<h2>Dynamic Welcome Page</h2>

<form method="POST">

    Enter Your Name:
    <input type="text" name="username">

    <input type="submit" value="Submit">

</form>

<?php

if(isset($_POST['username'])){

    $name = $_POST['username'];

    echo "<h3>Welcome " . $name . "</h3>";
}

?>

</body>
</html>