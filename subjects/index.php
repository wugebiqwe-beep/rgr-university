<?php
include "../db/db.php";

$result = $conn->query("
SELECT s.name AS subject_name,
       d.name AS department_name
FROM subjects s
JOIN departments d ON s.department_id = d.department_id
");
?>

<h2>Дисципліни</h2>

<table>
<tr>
    <th>Назва дисципліни</th>
    <th>Кафедра</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['subject_name'] ?></td>
    <td><?= $row['department_name'] ?></td>
</tr>
<?php endwhile; ?>
</table>
