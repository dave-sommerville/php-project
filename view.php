<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
</head>
<body>
    <h2>Submitted Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
        <?php
        $sql = "SELECT * FROM users ORDER BY submitted_at DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['submitted_at']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="index.php">Back to Form</a>
</body>
</html>