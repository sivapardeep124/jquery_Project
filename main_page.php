<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud Project In Php Mysql jQuery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .hhh{
      color: white;
    }
    .hk{
      color: white;
    }
    .jumbotron{
      background-color: blue;
      margin: 20;

    }
    h4{
      font-size: 30;
    }



  </style>
</head>
<body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h2 class="hhh">Alagappa University</h2>
    <p class="hk">Alagappa Instiute Of Skill Development In ( B.VOC )</p>
      </div>
    </div>
<div class="container">
<div class="row">
  <div class="col-md-3"> <h4 class=""> <i class="fa fa-edit"></i> Add Students</h4> 

    <form id="one" class="form-group">
      <div class="form-group">
        <label>Name</label><br>
        <input type="text" name="name" class="form-control" placeholder="Enter the name" id="name" required>
      </div>
       <div class="form-group">
        <label>Age</label><br>
        <input type="text" name="age" class="form-control" placeholder="Enter the age" id="age" required>
      </div>
       <div class="form-group">
        <label>City</label><br>
        <input type="text" name="city" class="form-control" placeholder="Enter the city" id="city" required>
      </div>
        <button type="button" class="btn btn-success" id="save" onclick="showSwal('success-message')">Save Details</button>


        <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color: #0599CD">
        <h4 class="modal-title">Update Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <label>Name</label><br>
          <input type="text" name="nam" id="nam" class="form-control">
        </div>
        <div class="form-group">
          <label>Age</label><br>
          <input type="text" name="ag" id="ag" class="form-control">
        </div>
        <div class="form-group">
          <label>City</label><br>
          <input type="text" name="cit" id="cit" class="form-control">
          <input type="hidden" name="id" class="form-control" id="id" required>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info upto" data-dismiss="modal" id="upto">Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
    </form>


  </div>
  <div class="col-md-9" id="output"> 

  </div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#output").load("view.php");
  $("#save").click(function(event){
    $("#output").load("view.php");
    event.preventDefault();  
  if($('#name').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#age').val() == '')  
  {  
   alert("age is required");  
  }  
  else if($('#city').val() == '')
  {  
   alert("city is required");  
  }
   
  else  
  {
    $.ajax({  
    url:"insert.php",  
    method:"POST",  
    data:$('#one').serialize(), 
    success:function(data){
      swal("Data Added Successfully", "Students Data Inserted", "success");
    // alert("Data Added Successfully")  
      $("#output").load("view.php");
     $('#one')[0].reset();  
    }     
  });
  }
  });

   $(document).on("click",".upto",function(){
    var id = $(this).attr("data-id");
    // alert(id);

    $.ajax({
      url : "update_copy.php",
      method : "POST",
      data : {
        id : $('#id').val(),
        name: $('#nam').val(),
        age: $('#ag').val(),
        city: $('#cit').val(),

      },
      // data:$('#one').serialize(),
      success:function(kelo){
      // swal("Data Added Successfully", "Students Data Inserted", "success");  
      $("#output").load("view.php");
     $('#one')[0].reset();  
    }     
  });

});


  $(document).on("click",".del",function(){
    var del = $(this);
    var id = $(this).attr("data-id");
    // alert(id);
    $.ajax({  
    url:"delete.php",  
    method:"POST",  
    data:{id : id}, 
    success:function(data){ 
     swal("Deleted Successfully", "Students Data Deleted", "success");
    // alert("Data Added Successfully")  
      $("#output").load("view.php");
    }     
  });
  });


  $(document).on("click",".edit",function(){
    var id_a = $(this).attr("data-id");
    var name_a = $(this).attr("data-name");
    var age_a = $(this).attr("data-age");
    var city_a = $(this).attr("data-city");
    document.getElementById('nam').value = name_a;
    document.getElementById('ag').value = age_a;
    document.getElementById('cit').value = city_a;
    document.getElementById('id').value = id_a;

  });

 
  })

</script>

</body>
<!-- </html> -->