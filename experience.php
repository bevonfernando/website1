<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></link>
    <title>Experience</title>
</head>
<header>
<nav class="navbar">
    <a href="index.php" class="b"> Home</a>
     <a href="skill.php" class="b"> Skills</a>
     <a href="education.php" class="b"> Education</a>
     <a href="experience.php" class="b"> Work Experience</a>
     <a href="Certificates.php" class="b"> Certificates</a>
     <a href="references.php" class="b"> Reference</a>
     <a href="contact.php" class="b"> Contact</a>
</nav>
</header>
<body>
    

    <h1>Work Experience</h1>
    <div class="ii">

    <form action="add_experience.php" method="post">
        <input type="text" name="job_title" placeholder="Job Title" required>
        <input type="text" name="company" placeholder="Company" required>
        <input type="date" name="start_date" placeholder="Start Date" required>
        <input type="date" name="end_date" placeholder="End Date">
        <textarea name="description" placeholder="Description"></textarea>
        <input class= "bt" type="submit" value="Add">
    </form>
    
    <ul class= "ll">
        <?php
        $result = $conn->query("SELECT * FROM experience");
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row['job_title']) . " at " . htmlspecialchars($row['company']) . " (" . $row['start_date'] . " to " . $row['end_date'] . ") <a href='delete_experience.php?id=" . $row['id'] . "'>Delete</a></li>";
        }
        ?>
    </ul>
    </div>

    </body>
</html>