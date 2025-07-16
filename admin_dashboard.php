<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}
include 'db_config.php';
echo "<h2>Welcome, ".$_SESSION['admin']."</h2>";
echo "<a href='add_pet.php'>Add Pet</a> | <a href='logout.php'>Logout</a><br><br>";

$res = mysqli_query($conn, "SELECT ar.*, p.name FROM adoption_requests ar 
JOIN pets p ON ar.pet_id = p.pet_id");

while ($row = mysqli_fetch_assoc($res)) {
    echo "<p><strong>{$row['user_name']}</strong> wants to adopt <strong>{$row['name']}</strong> (Contact: {$row['contact']})</p>";
}
?>
