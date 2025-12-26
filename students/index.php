<?php
include "../db/db.php";
$res = $conn->query("
SELECT s.student_id, s.full_name, s.birth_date, g.name AS group_name
FROM students s
JOIN groups g ON s.group_id = g.group_id
");
?>
<h2>Студенти</h2>
<a href="add.php">➕ Додати</a>
<table>
<tr><th>ПІБ</th><th>Дата</th><th>Група</th><th>Дії</th></tr>
<?php while($row = $res->fetch_assoc()): ?>
<tr>
<td><?= $row['full_name'] ?></td>
<td><?= $row['birth_date'] ?></td>
<td><?= $row['group_name'] ?></td>
<td>
<a href="edit.php?id=<?= $row['student_id'] ?>">✏</a>
<a href="delete.php?id=<?= $row['student_id'] ?>">❌</a>
</td>
</tr>
<?php endwhile; ?>
</table>
