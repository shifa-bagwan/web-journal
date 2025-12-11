<!-- counter.php -->
<?php
$file = "counter.txt";

if(!file_exists($file)) {
    file_put_contents($file, 0);
}

$count = (int) file_get_contents($file);
$count++;
file_put_contents($file, $count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Visitor Counter</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow-sm text-center" style="width: 330px;">
    <h2 class="text-primary mb-3">Welcome to Our Website</h2>
    <h4 class="fw-bold">You are visitor number:</h4>
    <div class="display-6 text-success mt-2"><?php echo $count; ?></div>
</div>

</body>
</html>
