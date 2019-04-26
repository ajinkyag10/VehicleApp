<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="col-lg-12">
<h1 class="text-warning text-center">List</h1>
 <table class="table table-striped table-hover">
  <thead>
   <tr>
    <th>Brand</th>
    <th>Type</th>
    <th>Colour</th>
    <th>Price</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
 </thead>
 <tbody>
 <?php
  include 'server.php';
      $q = "select * from Vehicles";
      $displayquery = mysqli_query($con,$q);
      while($res = mysqli_fetch_array($displayquery)){
    ?>
  <tr>
    <td><?php echo $res['id'];?></td>
    <td><?php echo $res['Brand']; ?></td>
    <td><?php echo $res['Type']; ?></td>
    <td><?php echo $res['Colour']; ?></td>
    <td> <?php echo $res['Price']; ?></td>
    <td><button class="btn btn-danger"> <a href="delete.php?id=<?php echo $res['id']; ?>"class="text-white">Delete</a></button></td>
    <td><button class="btn btn-primary"> <a href="edit.php?id=<?php echo $res['id']; ?>"class="text-white">Edit</a></button></td>
  </tr>
  <?php
     }
  ?>
</tbody>
</table>
</body>
</html> 