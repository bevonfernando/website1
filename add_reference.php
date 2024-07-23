<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact_info = $_POST['contact_info'];
    $relation = $_POST['relation'];

    $stmt = $conn->prepare("INSERT INTO user_references (name, contact_info, relation) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $contact_info, $relation);
    $stmt->execute();
    $stmt->close();
}

header("Location: references.php");
?>
