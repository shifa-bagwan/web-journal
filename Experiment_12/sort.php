<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";   // Your password
$dbname = "MCA";        // Database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get sorting order
$order = "ASC";
if (isset($_GET['order']) && $_GET['order'] == "desc") {
    $order = "DESC";
}

$sql = "SELECT * FROM students ORDER BY name $order";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sorted Records</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-4">

<div class="container" style="max-width:700px;">
    <div class="card p-4 shadow-sm">

        <h3 class="text-center mb-4">Sorted Student Records</h3>

        <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['age'] ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <?php else: ?>
            <div class="alert alert-warning text-center">No records found.</div>
        <?php endif; ?>

        <a href="index.html" class="btn btn-secondary mt-3">Back</a>

    </div>
</div>

</body>
</html>

<?php $conn->close(); ?>
