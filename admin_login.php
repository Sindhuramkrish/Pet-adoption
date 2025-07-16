<?php
session_start();
include 'db_config.php';

if ($_POST) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $res = mysqli_query($conn, "SELECT * FROM admins WHERE username='$u'");
    $admin = mysqli_fetch_assoc($res);
    if ($admin && password_verify($p, $admin['password'])) {
        $_SESSION['admin'] = $admin['username'];
        header("Location: admin_dashboard.php");
    } else {
        echo "Invalid login.";
    }
}
?>

<form method="POST">
    Username: <input name="username"><br>
    Password: <input name="password" type="password"><br>
    <input type="submit" value="Login">
</form>
