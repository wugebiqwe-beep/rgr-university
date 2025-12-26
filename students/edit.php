<?php
include "../db/db.php";
$id = $_GET['id'];
$student = $conn->query("SELECT * FROM students WHERE student_id=$id")->fetch_assoc();

if ($_POST) {
    $stmt = $conn->prepare(
        "UPDATE students SET full_name=?, birth_date=?, group_id=? WHERE student_id=?"
    );
    $stmt->bind_param("ssii",
        $_POST['full_name'], $_POST['birth_date'], $_POST['group_id'], $id
    );
    $stmt->execute();
    header("Location: index.php");
}
?>
<form method="post">
<input name="full_name" value="<?= $student['full_name'] ?>"><br>
<input type="date" name="birth_date" value="<?= $student['birth_date'] ?>"><br>
<input name="group_id" value="<?= $student['group_id'] ?>"><br>
<button>Оновити</button>
</form>
