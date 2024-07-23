<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $contact_info = $_POST['contact_info'];

    $stmt = $conn->prepare("INSERT INTO contacts (type, contact_info) VALUES (?, ?)");
    $stmt->bind_param("ss", $type, $contact_info);
    $stmt->execute();
    $stmt->close();
}

header("Location: contact.php");
?>