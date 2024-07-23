<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></link>
    <title>Reference</title>
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
<h1>References</h1>
<div class="ii">

<form action="add_reference.php" method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="contact_info" placeholder="Contact Info" required>
    <input type="text" name="relation" placeholder="Relation" required>
    <input class= "bt" type="submit" value="Add">
</form>

<ul class= "ll">
    <?php
    $result = $conn->query("SELECT * FROM user_references");
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['name']) . " (" . htmlspecialchars($row['relation']) . "): " . htmlspecialchars($row['contact_info']) . " <a href='delete_reference.php?id=" . $row['id'] . "'>Delete</a></li>";
    }
    ?>
</ul>
</div>
</body>
</html>

