<?php
include 'db_connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $update_sql = "UPDATE products
                   SET product_name='$product_name',
                       category='$category',
                       price='$price',
                       quantity='$quantity'
                   WHERE id=$id";

    mysqli_query($conn, $update_sql);

    header("Location: view_products.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="text-center mb-4">Edit Product</h1>

    <form method="POST">

        <div class="mb-3">
            <label>Product Name</label>
            <input type="text" name="product_name"
                   value="<?php echo $row['product_name']; ?>"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category"
                   value="<?php echo $row['category']; ?>"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" step="0.01"
                   name="price"
                   value="<?php echo $row['price']; ?>"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Quantity</label>
            <input type="number"
                   name="quantity"
                   value="<?php echo $row['quantity']; ?>"
                   class="form-control">
        </div>

        <button type="submit" name="update" class="btn btn-success">
            Update Product
        </button>

        <a href="view_products.php" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>