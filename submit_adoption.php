<?php
include 'db_config.php';
$pid = $_POST['pet_id'];
$name = $_POST['user_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
mysqli_query($conn, "INSERT INTO adoption_requests (pet_id, user_name, email, contact) 
VALUES ('$pid', '$name', '$email', '$contact')");
mysqli_query($conn, "UPDATE pets SET status='Pending' WHERE pet_id=$pid");
echo "Request Submitted!";
?>
