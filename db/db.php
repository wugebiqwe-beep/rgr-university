<?php
$conn = new mysqli("localhost", "root", "", "university_db");
if ($conn->connect_error) {
    die("Помилка БД: " . $conn->connect_error);
}
?>
