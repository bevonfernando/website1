<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_title = $_POST['job_title'];
    $company = $_POST['company'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO experience (job_title, company, start_date, end_date, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $job_title, $company, $start_date, $end_date, $description);
    $stmt->execute();
    $stmt->close();
}

header("Location: experience.php");
?>