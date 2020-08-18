
<?php include "condb.php"?>
<?php


   
   
    
    //$email=$_POST['email'];
    //$pass=$_POST['password'];
  
    
    
    $query="SELECT * FROM application ;";
    $result=mysqli_query($connect,$query);
    if(!$result)
    {
        die("query failled".mysqli_error());
    }
  

?>

 <style>
  .head-text {
       font-family: :cursive;
         color: deepskyblue;
         font-weight: 20px;
      font-size: 30px;
      padding-left: 150px;
      margin:auto;
    
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<div class="jumbotron text-center"><h1 style="color:#16A085 ">Information of  Emergency Help Request </h1></div>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500;600;700;800&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/85f3aaa0a1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container" >
    <div class="col-sm-6">
    <div class="table-responsive">
  <table class="table table-dark table-hover">
     
       <?php 
            echo "<tr>";
               
                echo "<th>name</th>";
                echo "<th>phone</th>";
                echo "<th>member</th>";
                echo "<th>area</th>";
                echo "<th>email</th>";
               echo "<th>emergency</th>";
              echo "<th>help</th>";
                
            echo "</tr>";
        
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
               
                echo "<td>" . $row['name'] . "</td>";
               
                echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['member'] . "</td>";
            echo "<td>" . $row['area'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['emergency'] . "</td>";
            echo "<td>" . $row['help'] . "</td>";
            echo "</tr>";
        }
       
        // Free result set
        mysqli_free_result($result);
    
        ?>
       
     </table>
         
    </div>
    </div>
        
            
        
    
</div>



   

   
</body>
</html>
                  
       