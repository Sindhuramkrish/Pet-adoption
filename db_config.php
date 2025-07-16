<?php
$conn = mysqli_connect("localhost", "root", "", "pet_adoption");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>