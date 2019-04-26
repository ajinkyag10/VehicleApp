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
<div class="col-lg-6 m-auto">
<form method="post" action="">
  <br><br> <div class="card">
  <div class="card-header bg-dark">
  <h1 class="text-white text-center">Insert</h1></div><br>
    
        <label>Brand</label>
        <input type="text" name="brand" class="form-control"><br>
    
    
        <label>Type</label>
        <input type="text" name="type" class="form-control"><br>
    

     
<select name="colour">
    <option value="select">  Colour </option>
    <option value="blue">    Blue   </option>
    <option value="red">  Red </option>
</select><br>
    
   
        <label>Price</label>
        <input type="number" name="price" class="form-control"><br>
    
    
        
        <button class="btn btn-success" type="submit" name="save">Save</button><br>
   
</form>
</body>
</html>