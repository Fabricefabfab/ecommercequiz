<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

 <div class="container">
 <div class="col-lg-12">


 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Name </th>
 <th> Phone </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php
 include './Model/conn.php';
 $q = "select * from phonebook";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['pid'];  ?> </td>
 <td> <?php echo $res['pname'];  ?> </td>
 <td> <?php echo $res['pphoned'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?pid=<?php echo $res['pid']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?pid=<?php echo $res['pid']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>
 

 <?php 
 }
  ?>
  
 
 </table> 
 

 </div>
 </div>
 

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>