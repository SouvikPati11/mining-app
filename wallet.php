<?php
session_start();
require 'database.php';
$userId = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['wallet']) {
    $wallet = $_POST['wallet'];
    $stmt = $pdo->prepare("SELECT points FROM users WHERE telegram_id = ?");
    $stmt->execute([$userId]);
    $points = $stmt->fetchColumn();

    if ($points >= 100) {
        // Proceed withdrawal logic here
        echo "✅ Withdrawal Requested!";
    } else {
        echo "❌ Not enough points.";
    }
} else {
    echo '<form method="POST"><input type="text" name="wallet" placeholder="Your TON wallet"><button type="submit">Withdraw</button></form>';
}
?>
