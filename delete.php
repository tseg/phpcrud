<?php
include 'db_connection.php';

//delete row from database in to database table
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);


    header("Location: index.php");
}
?>
