<?php
session_start();

$_SESSION['user'] = "Debbie";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Welcome Page</title>
</head>
<body>

<h2>Session Example</h2>

<?php
echo "Welcome " . $_SESSION['user'];
?>

</body>
</html>