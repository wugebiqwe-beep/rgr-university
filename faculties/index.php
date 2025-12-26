<?php
include "../db/db.php";
$result = $conn->query("SELECT * FROM faculties");
?>

<h2>Факультети</h2>

<ul>
<?php while ($row = $result->fetch_assoc()): ?>
    <li><?= $row['name'] ?></li>
<?php endwhile; ?>
</ul>
