<?php
include 'db_connection.php';
//update row of database table

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $data = array(
        'first_name' => $_POST['first_name'], 
        'last_name' => $_POST['last_name'], 
        'email' => $_POST['email'],
        'id' => $_GET['id']
    );
    /*
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    */
    $sql = "UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email WHERE id = :id";
    $stmt = $conn->prepare($sql);
    //$stmt->execute(['first_name' => $first_name, 'last_name' => $last_name, 'email' => $email, 'id' => $id]);
    $stmt->execute($data);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Update User</h2>

    <form action="" method="POST">
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" value="<?= $user['first_name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" value="<?= $user['last_name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $user['email']; ?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Update User</button>
    </form>
</div>
</body>
</html>
