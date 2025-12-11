<!-- clock.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bootstrap Digital Clock</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    #clock {
        font-size: 55px;
        font-family: monospace;
        color: #00ff00;
        background: #000;
        padding: 20px 40px;
        border-radius: 12px;
        display: inline-block;
        box-shadow: 0 0 15px rgba(0,255,0,0.4);
        letter-spacing: 3px;
    }
</style>
</head>

<body class="bg-light d-flex flex-column justify-content-center align-items-center vh-100">

    <h2 class="text-primary mb-4">Server Time Digital Clock</h2>

    <div id="clock">
        <?php
            date_default_timezone_set("Asia/Kolkata");
            echo date("H:i:s");
        ?>
    </div>

<script>
function updateClock() {
    let now = new Date();
    let h = String(now.getHours()).padStart(2, '0');
    let m = String(now.getMinutes()).padStart(2, '0');
    let s = String(now.getSeconds()).padStart(2, '0');

    document.getElementById("clock").innerHTML = `${h}:${m}:${s}`;
}
setInterval(updateClock, 1000);
updateClock();
</script>

</body>
</html>
