<?php
include_once 'product.php';
include_once 'database.php';

$database = new Database();
$conn = $database->getConnection();
$product = new Product($conn);

$productId = $_GET['id'];
$productDetails = $product->getProductById($productId);

if (isset($_POST['editBtn'])) {
    $id = $productDetails['id'];
    $name = $_POST['name'];
    $size = $_POST['size'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if ($product->updateProduct($id, $name, $size, $image, $description, $price)) {
        echo "<script>alert('Product updated successfully!'); window.location.href='productAdmin.php';</script>";
    } else {
        echo "<script>alert('Error updating product.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

h3 {
    color: #333;
}

form {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #5cb85c;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #4cae4c;
}
        </style>
</head>
<body>
    <h3>Edit Product</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $productDetails['id'] ?>"> <br> <br>
        <input type="text" name="name" value="<?= $productDetails['name'] ?>"> <br> <br>
        <input type="text" name="size" value="<?= $productDetails['size'] ?>"> <br> <br>
        <input type="text" name="image" value="<?= $productDetails['image'] ?>"> <br> <br>
        <input type="text" name="description" value="<?= $productDetails['description'] ?>"> <br> <br>
        <input type="text" name="price" value="<?= $productDetails['price'] ?>"> <br> <br>
        <input type="submit" name="editBtn" value="Save Changes"> <br> <br>
    </form>
</body>
</html>