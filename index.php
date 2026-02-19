<!DOCTYPE html>
<html>
<head>
    <title>Submit Data</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="process.php" method="POST">
        <input type="text" name="name" placeholder="Enter Name" required><br><br>
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        <button type="submit" name="submit">Submit Data</button>
    </form>
    <br>
    <a href="view.php">View All Submissions</a>
</body>
</html>