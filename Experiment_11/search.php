<?php
// search.php
header('Content-Type: application/json; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "system";     // change if necessary
$dbname   = "school";

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    http_response_code(500);
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}

$searchQuery = isset($_GET['query']) ? trim($_GET['query']) : '';

$sql = "SELECT id, name, age, grade FROM students WHERE name LIKE ?";
$stmt = $mysqli->prepare($sql);
$like = "%{$searchQuery}%";
$stmt->bind_param('s', $like);
$stmt->execute();
$result = $stmt->get_result();

$students = [];
while ($row = $result->fetch_assoc()) {
    $students[] = $row;
}

$stmt->close();
$mysqli->close();

echo json_encode($students);
