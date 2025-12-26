<?php
include "../db/db.php";

$result = $conn->query("
SELECT d.name AS department_name,
       f.name AS faculty_name
FROM departments d
JOIN faculties f ON d.faculty_id = f.faculty_id
");
?>

<h2>Кафедри</h2>

<table>
<tr>
    <th>Кафедра</th>
    <th>Факультет</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['department_name'] ?></td>
    <td><?= $row['faculty_name'] ?></td>
</tr>
<?php endwhile; ?>
</table>
