<?php
$conn = new mysqli('localhost', 'root', '', 'quiz_basic');
$result = $conn->query("SELECT username, score FROM leaderboard ORDER BY score DESC");
echo "<h2>Leaderboard</h2><table border='1'><tr><th>Rank</th><th>Name</th><th>Score</th></tr>";
$rank = 1;
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$rank}</td><td>{$row['username']}</td><td>{$row['score']}</td></tr>";
    $rank++;
}
echo "</table>";
?>