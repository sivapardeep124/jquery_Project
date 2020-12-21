<?php  
include "config.php";

$id = $_POST['id'];

$sql = "DELETE FROM jquery WHERE ID = $id";
$ans = mysqli_query($conn,$sql);
?>