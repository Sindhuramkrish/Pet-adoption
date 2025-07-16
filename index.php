<?php
include 'db_config.php';
$result = mysqli_query($conn, "SELECT * FROM pets WHERE status='Available'");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<p>{$row['name']} ({$row['type']}, Age: {$row['age']}) 
    <a href='adopt.php?id={$row['pet_id']}'>Adopt</a></p>";
}
?>
