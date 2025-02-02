<?php
include_once 'product.php';
include_once 'database.php';

$database = new Database();
$conn = $database->getConnection();
$product = new Product($conn);

$productId = $_GET['id'];
if ($product->deleteProduct($productId)) {
    echo "<script>alert('Product deleted successfully!'); window.location.href='productAdmin.php';</script>";
} else {
    echo "<script>alert('Error deleting product.');</script>";
}
?>
