<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}
include 'db_config.php';

if ($_POST) {
    $n = $_POST['name'];
    $t = $_POST['type'];
    $a = $_POST['age'];
    mysqli_query($conn, "INSERT INTO pets (name, type, age) VALUES ('$n', '$t', '$a')");
    echo "Pet added!";
}
?>

<form method="POST">
    Name: <input name="name"><br>
    Type: <input name="type"><br>
    Age: <input name="age"><br>
    <input type="submit" value="Add Pet">
</form>
