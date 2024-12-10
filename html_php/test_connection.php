<?php
$con = mysqli_connect('localhost', 'root', '', 'dbms');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successful!";
?>
