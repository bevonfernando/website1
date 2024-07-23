<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $degree = $_POST['degree'];
    $institution = $_POST['institution'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO education (degree, institution, start_date, end_date, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $degree, $institution, $start_date, $end_date, $description);
    $stmt->execute();
    $stmt->close();
}

header("Location: education.php");
?>
