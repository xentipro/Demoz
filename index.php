<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Shop Inventory</title>
</head>
<body>
    <h2>Shop Inventory</h2>

    <form method="POST" action="add.php">
        <input type="text" name="name" placeholder="Item Name" required>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <button type="submit">Add Item</button>
    </form>

    <h3>Inventory List</h3>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Name</th><th>Quantity</th><th>Price</th><th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM snacks");

        if (!$result) {
            die("Query Error: " . $conn->error);
        }
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['Snack_ID']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['price']}</td>
                    <td><a href='delete.php?id={$row['Snack_ID']}'>Delete</a></td>
                  </tr>";
        }        
        ?>
    </table>
</body>
</html>