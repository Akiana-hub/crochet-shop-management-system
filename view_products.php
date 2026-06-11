<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="text-center mb-4">Crochet Products</h1>

    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

        <?php

        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['product_name']."</td>
        <td>".$row['category']."</td>
        <td>".$row['price']."</td>
        <td>".$row['quantity']."</td>
        <td>
            <td>
    <a href='edit_product.php?id=".$row['id']."' class='btn btn-warning btn-sm'>
        Edit
    </a>

    <a href='delete_product.php?id=".$row['id']."' class='btn btn-danger btn-sm'>
        Delete
    </a>
</td>
        </td>
      </tr>";
        }

        ?>

        </tbody>

    </table>

    <a href='index.php' class='btn btn-secondary'>Back Home</a>

</div>

</body>
</html>