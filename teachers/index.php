<?php
include "../db/db.php";

$result = $conn->query("
SELECT t.full_name,
       d.name AS department_name,
       f.name AS faculty_name
FROM teachers t
JOIN departments d ON t.department_id = d.department_id
JOIN faculties f ON d.faculty_id = f.faculty_id
");
?>

<h2>Викладачі</h2>

<table>
<tr>
    <th>ПІБ</th>
    <th>Кафедра</th>
    <th>Факультет</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['full_name'] ?></td>
    <td><?= $row['department_name'] ?></td>
    <td><?= $row['faculty_name'] ?></td>
</tr>
<?php endwhile; ?>
</table>
