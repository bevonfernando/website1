<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $certificate = $_POST['certificate'];
    $institution = $_POST['institution'];
    $date_obtained = $_POST['date_obtained'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO certificates (certificate, institution, date_obtained, description) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $certificate, $institution, $date_obtained, $description);
    $stmt->execute();
    $stmt->close();
}

header("Location: certificates.php");
?>
