<?php
// db.php - Safe Database Connection Abstraction via PDO API
$dsn = "mysql:host=127.0.0.1;dbname=mzumbe_cafeteria_db;charset=utf8mb4";
$user = "root";
$pass = "";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false, // Enforcing real server prepared statements
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Return a JSON formatted error to ensure frontend jquery doesn't break
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Database connection failed securely."]);
    exit;
}
?>