<?php
include 'db_config.php';
$hash = password_hash("admin123", PASSWORD_DEFAULT);
mysqli_query($conn, "INSERT INTO admins (username, password) VALUES ('admin', '$hash')");
echo "Admin created!";
?>