<?php
session_start();
require 'database.php';

$userId = $_SESSION['user_id'] ?? null;

if ($userId) {
    $stmt = $pdo->prepare("UPDATE users SET points = points + 1 WHERE telegram_id = ?");
    $stmt->execute([$userId]);
    echo json_encode(['status' => 'success']);
}
?>
