<?php include "condb.php"?>
<?php
    $count=0;


    if(isset($_POST['submit']))
   {
    global $connect;
    $area=$_POST['area'];
    //$pass=$_POST['password'];
  
    
    
    $query="SELECT name,phone,email FROM assistance where area='$area' and role='online seller'";
    $result=mysqli_query($connect,$query);
        
        
    if(!$result)
    {
        die("query failled".mysqli_error());
    }
        
}
?>
<style>
  .head-text {
      font-family: cursive;
    color: fuchsia;
      font-weight: 100;
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
    <p class="head-text">information of available online dealers in your locality!!</p>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500;600;700;800&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/85f3aaa0a1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
    <div class="col-sm-6">
     <div class="table-responsive">
  <table class="table table-dark table-hover">
     
       <?php 
            echo "<tr>";
               
                echo "<th>name</th>";
                echo "<th>phone</th>";
                echo "<th>email</th>";
                
            echo "</tr>";
        
        while($row=mysqli_fetch_assoc($result))
        {
            $count=1;
            echo "<tr>";
               
                echo "<td>" . $row['name'] . "</td>";
               
                echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
       
        if($count==0)
      {
          echo "sorry, no one is availabe!";
      }
        mysqli_free_result($result);
    
        ?>
       
     </table>
         
    </div>
        
       
     
        
            
       <p>go to home page <a href="welcome.php">Exit</a>.</p>  
    </div>
</div>



   

   
</body>
</html>
                  