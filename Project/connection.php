<?php
// Connect to a Database
$conn = mysqli_connect('localhost', 'Jason', 'jj123', 'myCloset');

// Check Connection
if(!$conn){
    echo 'Connection Eror: ' .  mysqli_connect_error();
}
?>