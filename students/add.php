<?php
include "../db/db.php";
$groups = $conn->query("SELECT * FROM groups");

if ($_POST) {
    if ($_POST['full_name'] == "") die("Помилка!");
    $stmt = $conn->prepare(
        "INSERT INTO students (full_name, birth_date, group_id) VALUES (?, ?, ?)"
    );
    $stmt->bind_param("ssi", $_POST['full_name'], $_POST['birth_date'], $_POST['group_id']);
    $stmt->execute();
    header("Location: index.php");
}
?>
<form method="post">
ПІБ: <input name="full_name"><br>
Дата: <input type="date" name="birth_date"><br>
Група:
<select name="group_id">
<?php while($g = $groups->fetch_assoc()): ?>
<option value="<?= $g['group_id'] ?>"><?= $g['name'] ?></option>
<?php endwhile; ?>
</select><br>
<button>Зберегти</button>
</form>
