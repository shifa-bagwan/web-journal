<!-- login.php -->
<?php
session_start();

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === "admin" && $pass === "1234") {
        $_SESSION['user'] = $user;
    } else {
        $error = "Invalid Credentials!";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="container" style="max-width: 350px;">

<?php if(isset($_SESSION['user'])): ?>

    <div class="card p-4 text-center shadow-sm">
        <h3 class="mb-3">Welcome, <?php echo $_SESSION['user']; ?>!</h3>
        <a href="login.php?logout=true" class="btn btn-danger w-100">Sign Out</a>
    </div>

<?php else: ?>

    <div class="card p-4 shadow-sm">
        <h4 class="text-center mb-3">User Login</h4>

        <?php if(isset($error)): ?>
        <div class="alert alert-danger py-2"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="post">
            <input type="text" name="username" class="form-control mb-2" placeholder="Username">
            <input type="password" name="password" class="form-control mb-3" placeholder="Password">

            <button type="submit" name="login" class="btn btn-primary w-100">Sign In</button>
        </form>
    </div>

<?php endif; ?>

</div>

</body>
</html>
