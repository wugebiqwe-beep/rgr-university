<?php
include "../db/db.php";
$conn->query("DELETE FROM students WHERE student_id=".$_GET['id']);
header("Location: index.php");
