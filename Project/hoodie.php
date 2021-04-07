<?php

include('config/db_connection.php');

// Write Query for all clothes
$sql = 'SELECT id, clothing, color, brand FROM clothes ORDER BY created';
// Make Query and get Result
$result = mysqli_query($conn, $sql);
// Fetch$ the result(rows) as an array
$clothes = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Free Result from memory
mysqli_free_result($result);
// Close Connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<?php
// Include Header
 include ('C:\xampp\htdocs\main\templates\header.php'); 
 ?>

<div class='container'>
<?php
foreach($clothes as $cloth){ ?>
<h3><?php 
    if($cloth['clothing'] == 'Hoodies'){ 
        ?>
    <h3><?php   echo htmlspecialchars($cloth['clothing']); ?></h3>
    <?php    echo htmlspecialchars($cloth['color']); ?> <br>
     <?php   echo htmlspecialchars($cloth['brand']); ?>
    <div> <a href="createdelete.php?id= <?php echo $cloth['id'] ?>">Created/Delete</a> </div>
<?php } ?></h3>
<?php } ?>
</div>

 <?php
 // Include Footer
 include ('C:\xampp\htdocs\main\templates\footer.php'); 
 ?>
<html>
