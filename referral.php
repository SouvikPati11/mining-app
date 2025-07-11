<?php
session_start();
require 'database.php';
$userId = $_SESSION['user_id'];
$referralLink = "https://t.me/YourBot?start=$userId";

echo "<h2>Your Referral Link:</h2><p>$referralLink</p>";
