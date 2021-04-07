<?php

include('config/db_connection.php');

// Check Get Request ID Parameter
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    // Make SQL
    $sql = "SELECT * FROM clothes WHERE id = $id";
    // Get Query Results
    $result = mysqli_query($conn, $sql);
    // Fetch Results in Array
    $clothes = mysqli_fetch_assoc($result);
    // Free result and close conn
    mysqli_free_result($result);
    mysqli_close($conn);
}

//Delete Button
if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM clothes WHERE id = $id_to_delete";

    if(mysqli_query($conn, $sql)){
        //Valid
        header('Location: main.php');
    } {
        //Fail
        echo 'query error: ' . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<?php
// Include Header
 include ('C:\xampp\htdocs\main\templates\header.php'); 
 ?>

<h2>Created At</h2>
<div>
 <?php if($clothes){
   echo date($clothes['created']);
}
?>
<form action="createdelete.php" method="POST">
<input type="hidden" name="id_to_delete" value="<?php echo $clothes['id'] ?>">
<input type="submit" name="delete" value="Delete">
</form>
</div>

 <?php
 // Include Footer
 include ('C:\xampp\htdocs\main\templates\footer.php'); 
 ?>
<html>
