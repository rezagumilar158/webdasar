<?php
// Di sesuaikan Lagi sama Database Connectionnya 
include_once("connection.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($connection, "DELETE FROM data_diri WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>