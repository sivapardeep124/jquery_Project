<?php 
include "config.php";

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];

$sql = "UPDATE jquery SET NAME = '$name',AGE = $age ,CITY = '$city' WHERE ID = $id";

if(mysqli_query($conn,$sql)==true){
echo "Updated Successfully";

}
else{
	echo "Not Updated";
}


 ?>