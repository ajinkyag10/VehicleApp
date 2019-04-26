<?php
 
  // Initialize Variables
  $id=0;
  $Brand = "";
  $Type = "";
  $Colour = "";
  $Price = 0;

  // Connect To Database

  $con = mysqli_connect('localhost','root','Ajinkyag@ansh','Core_PHP');
    
  // If save button is clicked
 if(isset($_POST['save'])) {
     $Brand = $_POST['brand'];
     $Type = $_POST['type'];
     $Colour = $_POST['colour'];
     $Price = $_POST['price'];
     
     $query = "INSERT INTO `Vehicles`(`Brand`,`Type`,`Colour`,`Price`) VALUES ('$Brand','$Type','$Colour','$Price')";
     
     $q = mysqli_query($con,$query);
     header('location:index.php');
   }

   // To display list
    $q = "select * from Vehicles";
    $displayquery = mysqli_query($con,$displayquery);
    while($res = mysqli_fetch_array($displayquery));

?>