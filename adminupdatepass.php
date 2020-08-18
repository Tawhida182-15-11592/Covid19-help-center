<?php include "condb.php";
include "functio.php"
    ?>
    
<?php


    if(isset($_POST['submit']))
   {
    
    update();
        
        header("location:statistic.php");
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500;600;700;800&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/85f3aaa0a1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">

</head>
<body>    <h1  class="jumbotron text-center" style="color:#1ABC9C ">Change Password</h1>

<div class="container">
    <div class="col-sm-6">
          
     
<form action="adminupdatepass.php" method="post">
           <div class="form-group">
              <label for="name"style="color:#2E86C1  ">name</label>
               <input type="text" name="name" class="form-control" placeholder="name">
           </div>
           <div class="form-group">
              <label for="Passw"style="color:#2E86C1 ">Password</label>
               <input type="password" name="pass"class="form-control"placeholder="Password">
           </div>
           
           
           <div class="form-group">
            
               <input type="submit" class="btn btn-primary"name="submit"class="form-control" value="Update" >
           </div>
           
            
        </form>
       
     
        
            
        
    </div>
</div>



   

   
</body>
</html>
               

