<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crochet Shop Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
.card {
    transition: 0.3s ease;
    border: none;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.btn {
    border-radius: 20px;
    padding: 8px 20px;
}
</style>
    <style>
.hero-section {
    height: 300px;
    background: url('https://images.unsplash.com/photo-1604881991720-f91add269bed') center/cover no-repeat;
    position: relative;
}

.hero-section::before {
    content: "";
    position: absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background: rgba(0,0,0,0.5);
}

.hero-section div {
    position: relative;
    z-index: 2;
}
</style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">
            🧶 Crochet Shop Management System
        </a>
    </div>
</nav>
<div class="hero-section text-white text-center d-flex align-items-center justify-content-center">
    <div>
        <h1 class="display-4 fw-bold">Crochet Shop Management System</h1>
        <p class="lead">Beautiful handmade crochet products management made simple</p>
    </div>
</div>

<div class="container mt-5">

    <div class="text-center p-5 bg-light rounded shadow">
        <h1>Welcome to Crochet Shop Dashboard</h1>
        <p class="lead">
            Manage your crochet products, customers, and orders efficiently.
        </p>
    </div>

    <div class="row mt-5">

        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3>🧵</h3>
                    <h5>Add Product</h5>
                    <a href="add_product.php" class="btn btn-primary">Open</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3>📦</h3>
                    <h5>View Products</h5>
                    <a href="view_products.php" class="btn btn-success">Open</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3>🛒</h3>
                    <h5>Orders</h5>
                    <a href="orders.php" class="btn btn-warning">Open</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h3>👥</h3>
                    <h5>Customers</h5>
                    <a href="customers.php" class="btn btn-danger">Open</a>
                </div>
            </div>
        </div>

    </div>

</div>
</html>