<!DOCTYPE html>
<html>
<head>
    <title>Form Submission System</title>
</head>
<body>

<h2>Contact Form</h2>

<form method="POST">

    Name:
    <input type="text" name="name"><br><br>

    Email:
    <input type="email" name="email"><br><br>

    <input type="submit" value="Send">

</form>

<?php

if(isset($_POST['name']) && isset($_POST['email'])){

    echo "<h3>Form Submitted Successfully</h3>";

    echo "Name: " . $_POST['name'] . "<br>";
    echo "Email: " . $_POST['email'];
}

?>

</body>
</html>