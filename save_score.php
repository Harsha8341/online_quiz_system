<?php
$conn = new mysqli('localhost', 'root', '', 'quiz_basic');
$username = $_POST['username'];
$score = $_POST['score'];
$stmt = $conn->prepare("INSERT INTO leaderboard (username, score) VALUES (?, ?)");
$stmt->bind_param("si", $username, $score);
$stmt->execute();
$stmt->close();
$conn->close();
header("Location: leaderboard.php");
?>