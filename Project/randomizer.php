<?php
include('config/db_connection.php');
$result = mysqli_query($conn, 'SELECT id, clothing, color, brand FROM clothes WHERE clothing = "Hoodie" OR clothing = "Jackets" OR clothing = "SST" OR clothing = "LST"');
$clothes = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

if (isset($_POST['randomizebtn'])) {
    $x = rand(0, count($clothes));
    echo $clothes[$x]["clothing"];
    echo $clothes[$x]["color"];
    echo $clothes[$x]["brand"];


}

?>


<!DOCTYPE html>
<html>

<?php
// Include Header
include('C:\xampp\htdocs\main\templates\header.php');
?>

<body>
    <form class='form' action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="submit" name="randomizebtn" value="RANDOMIZE">
    </form>

    <?php
    // Include Footer
    include('C:\xampp\htdocs\main\templates\footer.php');
    ?>

</html>