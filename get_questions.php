<?php
$conn = new mysqli('localhost', 'root', '', 'quiz_basic');
$result = $conn->query("SELECT * FROM questions");
$questions = [];
while($row = $result->fetch_assoc()) {
    $questions[] = $row;
}
echo json_encode($questions);
?>