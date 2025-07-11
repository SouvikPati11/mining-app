<?php
session_start();
require 'database.php';
$userId = $_SESSION['user_id'];

if (isset($_POST['task_completed'])) {
    $stmt = $pdo->prepare("UPDATE users SET points = points + 5 WHERE telegram_id = ?");
    $stmt->execute([$userId]);
    echo "Reward Claimed!";
} else {
    echo '<form method="POST"><button name="task_completed" value="1">Follow on Twitter (Earn 5 Points)</button></form>';
}
?>
