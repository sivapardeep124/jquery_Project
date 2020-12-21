<?php  

include "config.php";
?>
<h4 class=""> <i class="fa fa-users"></i> Studens Details</h4> 
<div class="form-group">
    <table class="table">
      <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">City</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        
         <?php  
             
             $sql = "SELECT * FROM jquery ORDER BY NAME";

             $use = mysqli_query($conn,$sql);
             while ($view = mysqli_fetch_assoc($use)) {
               echo "<tr>";
               echo "<th scope='row'>{$view["NAME"]}</th>";
               echo "<th>{$view["AGE"]}</th>";
               echo "<th>{$view["CITY"]}</th>";
               echo "<th><button class='btn btn-info edit' id='edit' data-id = '{$view["ID"]}'data-name = '{$view["NAME"]}'data-age = '{$view["AGE"]}'data-city = '{$view["CITY"]}'data-toggle='modal' data-target='#myModal'><i class='fa fa-edit'></i></button></th>";
               echo "<th><button class='btn btn-danger del' id='del' data-id = '{$view["ID"]}'><i class='fa fa-trash'></i></button></th>";
               echo "</tr>";
			 }

         ?>
      </tbody>
    </table>
  </div>