<?php 
// Establish database connection
$con = mysqli_connect('localhost', 'root', '', 'dbms');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
