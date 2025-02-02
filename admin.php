<?php
include_once 'welcomeAdmin.php'; 
include_once 'database.php';


$database = new Database();
$conn = $database->getConnection();

try {
    
    $sql_contact_form = "SELECT * FROM contact_form";
    $stmt_contact_form = $conn->query($sql_contact_form);
    $result_contact_form = $stmt_contact_form->fetchAll(PDO::FETCH_ASSOC);

    
    $sql_orders = "SELECT * FROM orders";
    $stmt_orders = $conn->query($sql_orders);
    $result_orders = $stmt_orders->fetchAll(PDO::FETCH_ASSOC);


    $sql_user = "SELECT * FROM user";
    $stmt_user = $conn->query($sql_user);
    $result_users = $stmt_user->fetchAll(PDO::FETCH_ASSOC);

    
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

    
        table {
            width: 100%;
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

        
    </style>
</head>
<body>
    <div class="dashboard">
        
        <div class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
            <li><a href="admin.php">Dashboard</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="productAdmin.php">Product Menagment</a></li>
            <li><a href="addProducts.php">Add Products</a></li>
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

            
            <h2>Contact Form Data</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Phone</th>
                    <th>Message</th>
                </tr>
                <?php
   if (count($result_contact_form) > 0) {
    foreach ($result_contact_form as $row) {
        echo "<tr>
            <td>{$row['id_contact']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['company']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['message']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No contact form submissions found.</td></tr>";
}
                ?>
            </table>

        
            <h2>Orders Data</h2>
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>House</th>
                    <th>Phone</th>
            
                </tr>
                <?php
                if (count($result_orders) > 0) {
                    foreach ($result_orders as $row) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['surname']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['product']}</td>
                            <td>{$row['size']}</td>
                              <td>{$row['country']}</td>
                                <td>{$row['city']}</td>
                                  <td>{$row['address']}</td>
                                    <td>{$row['house']}</td>
                                      <td>{$row['phone']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No orders found.</td></tr>";
                }
                ?>
            </table>

            
            <h2>Users Data</h2>
            <table>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                </tr>
                <?php
                 if (count($result_users) > 0) {
                    foreach ($result_users as $row) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['surname']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['password']}</td>
                            <td>{$row['role']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No users found.</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>

    
    <div class="footer">
        &copy; 2023 Admin Dashboard. All rights reserved.
    </div>
</body>
</html>
