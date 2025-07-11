<?php
require 'database.php';

$stmt = $pdo->query("UPDATE users SET points = points + auto_tap_speed WHERE auto_tap_enabled = 1");
