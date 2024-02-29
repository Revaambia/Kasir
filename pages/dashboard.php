<?php 
session_start();
require_once('../db/DB_connection.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../index.php');
    exit;
}

$realName = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Shop | Welcome Cashier!</title>
    <link rel="stylesheet" href="../assets/style/dashboard.css">
</head>
<body>
<div class="container">
    <div class="box form-box" style="width: 80%;">
        <body>
            <center>
                <h1>Hello, <?php echo htmlspecialchars($realName); ?>! Welcome to the dashboard!</h1>
            </center>

            <form action="../db/DB_logout.php" method="post">
                <center><button type="submit" class="btn" class="btn-logout">Log Out</button></center>
            </form>

            <hr style="width: 100%; margin-top: 20px; margin-bottom: 20px;"> <!-- Garis tipis -->

            <div class="dashboard-content" style="text-align: center;">
                <h2>Dashboard</h2>
                <p>Selamat datang di dashboard kasir Snack Shop. Anda dapat mengelola produk dan melakukan tugas lain di sini.</p>
            </div>

            <hr style="width: 100%; margin-top: 20px; margin-bottom: 20px;"> <!-- Garis tipis -->

            <div class="additional-content" style="text-align: center;">
                <h2>Manage Products</h2>
                <p>Would you like to manage products?</p>
                <p><a href="./kasir/manage_product.php" class="text-blue-500 hover:underline">Click here</a></p>
            </div>
        </body>
    </div>
</div>
</body>
</html>
 