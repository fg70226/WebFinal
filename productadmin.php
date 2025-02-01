<?php
include_once 'product.php';
include_once 'database.php';

$database = new Database();
$conn = $database->getConnection();
$product = new Product($conn);

try {
    $sql_products = "SELECT * FROM products";
    $stmt_products = $conn->query($sql_products);
    $result_products = $stmt_products->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $size = $_POST['size'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = basename($_FILES['image']['name']);
        $target_dir = "uploads/";
        $target_file = $target_dir . $image_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image = $target_file;
        } else {
            echo "<script>alert('Failed to upload image');</script>";
            $image = "";
        }
    } else {
        $image = "";
    }

    if ($product->addProduct($name, $size, $image, $description, $price)) {
        echo "<script>alert('Product added successfully!'); window.location.href='product.php';</script>";
    } else {
        echo "<script>alert('Error while adding product.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Products</title>
</head>
<style>


body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    }

    .dashboard {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 250px;
        background-color: #2c3e50;
        color: #fff;
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 24px;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        margin: 15px 0;
    }

    .sidebar ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 18px;
        display: block;
        padding: 10px;
        border-radius: 4px;
        transition: background 0.3s;
    }

    .sidebar ul li a:hover {
        background-color: #34495e;
    }

    .main-content {
        flex: 1;
        padding: 20px;
        background-color: #fff;
        flex-direction:start;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .header h1 {
        font-size: 28px;
        color: #333;
    }

    .header .user-info {
        display: flex;
        align-items: center;
    }

    .header .user-info span {
        margin-right: 10px;
        font-size: 16px;
        color: #555;
    }

    .header .user-info img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #2c3e50;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .footer {
        text-align: center;
        padding: 20px;
        background-color: #2c3e50;
        color: #fff;
        margin-top: auto;
    }
        
.form-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    margin: auto;
}

h2 {
    text-align: center;
    color: #333;
}

input[type="text"],
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:rgb(105, 141, 241);
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
    
</style>
<body>

<div class="dashboard">
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="admin.php">Dashboard</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="productAdmin.php">Products</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Products</h1>
            <div class="user-info">
                <span>Admin</span>
                <img src="images.jpg" alt="Admin Avatar">
            </div>
        </div>

        <div class="form-container">
            <h2>Add New Product</h2>
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Product Name" required>
                <input type="text" name="size" placeholder="Size" required>
                <input type="file" name="image" required>
                <input type="text" name="description" placeholder="Description" required>
                <input type="text" name="price" placeholder="Price" required>
                <input type="submit" value="Add">
            </form>
        </div>

        <h2>Products</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Size</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            if (count($result_products) > 0) {
                foreach ($result_products as $row) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['size']}</td>
                        <td><img src='{$row['image']}' width='50'></td>
                        <td>{$row['description']}</td>
                        <td>\${$row['price']}</td>
                         <td>
                    <a href='product.php?edit={$row['id']}'> Edit</a></td>
                    <td> <a href='product.php?delete={$row['id']}' onclick='return confirm(\"Are you sure?\")'> Delete</a></td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No products found.</td></tr>";
            }
            ?>
        </table>
    </div>
</div>

<div class="footer">
    &copy; 2024 Admin Dashboard. All rights reserved.
</div>

</body>
</html>