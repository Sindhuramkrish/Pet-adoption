<?php
$pet_id = $_GET['id'];
?>
<form method="POST" action="submit_adoption.php">
    <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>">
    Name: <input type="text" name="user_name" required><br>
    Email: <input type="email" name="email" required><br>
    Contact: <input type="text" name="contact" required><br>
    <input type="submit" value="Submit Request">
</form>
