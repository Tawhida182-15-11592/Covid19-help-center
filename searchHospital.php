<?php include "condb.php"?>


 <style>
  .head-text {
      font-family: :cursive;
         color: deepskyblue;
         font-weight: 20px;
      font-size: 30px;
      padding-left: 150px;
      margin:auto;
    
    
     
  }
     .head-text1
     {
         font-family: :cursive;
         color: darkviolet;
         font-weight: 20px;
         padding-left: 5px;
         padding-top: 15px;
         margin:auto;
     
     }
    
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <h1 class="head-text">search for available Hospitals in your area! &#127880</h1>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500;600;700;800&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/85f3aaa0a1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">

</head>
<body>


<div class="container">
    <div class="col-sm-6">
        <form action="HospitalList.php" method="post">
           <div class="form-group">
              <label  style="font-size:40px">your Area &#129488</label>
               <input type="text" name="area" class="form-control" placeholder="typer your location">
           </div>
           
           <div class="form-group">
            
               <input type="submit" class="btn btn-primary"name="submit"class="form-control" value="search &#128269" >
           </div>
          
           
            
        </form>
        
        
       
        
         
    </div>
</div>



   

   
</body>
</html>