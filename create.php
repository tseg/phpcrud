<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = array(
        'first_name' => $_POST['first_name'], 
        'last_name' => $_POST['last_name'], 
        'email' => $_POST['email']
    );

    /*
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
    */

    $sql = "INSERT INTO users (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
    $stmt = $conn->prepare($sql);
    //$stmt->execute(['first_name' => $first_name, 'last_name' => $last_name, 'email' => $email]);
    $stmt->execute($data);

   
    header("Location: index.php");
}
?>
