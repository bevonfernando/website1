<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $skill = $_POST['skill'];
    $stmt = $conn->prepare("INSERT INTO skills (skill) VALUES (?)");
    $stmt->bind_param("s", $skill);
    $stmt->execute();
    $stmt->close();
}

header("Location: skill.php");

?>

