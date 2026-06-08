<?php
// process.php - Safe Server-Side Controller Script
header('Content-Type: application/json');
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Securely clean and validate inputs on Server Side (Lecture 4)
    $student_name = isset($_POST['student_name']) ? trim($_POST['student_name']) : '';
    $cafeteria_name = isset($_POST['cafeteria_name']) ? trim($_POST['cafeteria_name']) : '';
    $food_item = isset($_POST['food_item']) ? trim($_POST['food_item']) : '';
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

    if ($student_name === "" || $cafeteria_name === "" || $food_item === "" || $quantity <= 0) {
        echo json_encode(["status" => "error", "message" => "Invalid inputs. Server processing halted."]);
        exit;
    }

    // Secure SQL insertion using question mark (?) placeholders to prevent SQL Injection
    $sql = "INSERT INTO orders (student_name, cafeteria_name, food_item, quantity) VALUES (?, ?, ?, ?)";
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$student_name, $cafeteria_name, $food_item, $quantity]);
        
        // Output successful dynamic JSON back to jQuery client
        echo json_encode([
            "status" => "success", 
            "message" => "Order placed successfully! Enjoy your meal at " . htmlspecialchars($cafeteria_name) . "."
        ]);
        exit;
    } catch (\PDOException $e) {
        echo json_encode(["status" => "error", "message" => "System error: Failed to save cafeteria order."]);
        exit;
    }
} else {
    echo json_encode(["status" => "error", "message" => "Bad request method."]);
    exit;
}
?>