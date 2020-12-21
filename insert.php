<?php  
   include "config.php";

   $name = $_POST["name"];
   $age = $_POST["age"];
   $city = $_POST["city"];

   $sql = "INSERT INTO jquery(NAME,AGE,CITY) VALUES('$name',$age,'$city')";
   $insert = mysqli_query($conn,$sql);
   if ($insert == true) {
   	print("Data Add Successfully");
   }
   else{
   	print("un Success");
   }
?>