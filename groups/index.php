<?php
include "../db/db.php";

$result = $conn->query("
SELECT g.name AS group_name, g.course,
       d.name AS department_name,
       f.name AS faculty_name
FROM groups g
JOIN departments d ON g.department_id = d.department_id
JOIN faculties f ON d.faculty_id = f.faculty_id
");
?>

<h2>Групи</h2>

<table>
<tr>
    <th>Група</th>
    <th>Курс</th>
    <th>Кафедра</th>
    <th>Факультет</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['group_name'] ?></td>
    <td><?= $row['course'] ?></td>
    <td><?= $row['department_name'] ?></td>
    <td><?= $row['faculty_name'] ?></td>
</tr>
<?php endwhile; ?>
</table>
