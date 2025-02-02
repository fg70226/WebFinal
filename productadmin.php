<?php
include_once 'product.php';
include_once 'database.php';

$database = new Database();
$conn = $database->getConnection();
$product = new Product($conn);


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    if ($product->deleteProduct($id)) {
        echo "<script>alert('Product deleted successfully!'); window.location.href='productAdmin.php';</script>";
    } else {
        echo "<script>alert('Error deleting product.');</script>";
    }
}


$products = $product->getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Products</title>
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

    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 12px;
        text-align: left;
    }
    th {
        background-color: #2c3e50;
        color: #fff;
    }
    
    .action-links a {
        color: #fff;
        padding: 5px 10px;
        border-radius: 4px;
        text-decoration: none;
    }
    .action-links a.edit {
        background-color: #28a745;
    }
    .action-links a.delete {
        background-color: #dc3545;
    }
    
</style>
    </style>
</head>
<body>
<div class="dashboard">
        
        <div class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="productadmin.php">Products Menagment</a></li>
                <li><a href="addproducts.php">Add products</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>

        
        <div class="main-content">
            <div class="header">
                <h1>Dashboard</h1>
                <div class="user-info">
                    <span>Admin</span>
                    <img src="images.jpg" alt="Admin Avatar">
                </div>
            </div>

<div class="container">
    <h1>Product Management</h1>

    
    <h2>Products List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Size</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach ($products as $product) {
            echo "
            <tr>
                <td>{$product['id']}</td>
                <td>{$product['name']}</td>
                <td>{$product['size']}</td>
                <td><img src='{$product['image']}' width='50'></td>
                <td>{$product['description']}</td>
                <td>\${$product['price']}</td>
                <td class='action-links'>
                    <a href='productAdmin.php?delete={$product['id']}' class='delete' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                </td>
            </tr>
            ";
        }
        ?>
    </table>
</div>
</body>
</html>
   

