<?php 

include ('config/db_connection.php');

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
<html>

<?php
 // Include Header
 include ('C:\xampp\htdocs\main\templates\header.php'); 
?>

<body>
<a href="shirt.php" class='category'>Shirts</a>
<br>
<a href="hoodie.php" class='category'>Hoodies</a>
<br>
<a href="jacket.php" class='category'>Jackets</a>
<br>
<a href="short.php" class='category'>Shorts</a>
<br>
<a href="pant.php" class='category'>Pants</a>
<br>
<a href="sock.php" class='category'>Socks</a>
<br>
<a href="shoe.php" class='category'>Shoes</a>

<?php
 // Include Footer
 include ('C:\xampp\htdocs\main\templates\footer.php'); 
?>
</html>

