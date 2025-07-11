<?php
// Assume Telegram Web App data passed via POST
session_start();
$user = json_decode($_POST['telegram_data'], true);
$_SESSION['user_id'] = $user['id'];
$_SESSION['name'] = $user['first_name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>TonMe Mining Game</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Welcome, <?= $_SESSION['name'] ?></h1>
    <button onclick="tap()">⛏️ Tap to Mine</button>
    <div id="points">Points: <span>0</span></div>

    <a href="referral.php">🙌 Referral</a> |
    <a href="social_tasks.php">📱 Social Tasks</a> |
    <a href="wallet.php">💰 Wallet</a>

    <script src="assets/script.js"></script>
</body>
</html>
