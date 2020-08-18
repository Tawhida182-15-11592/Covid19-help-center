<?php include "condb.php"?>
<?php include "functio.php"?>
<?php


    if(isset($_POST['accept']))
   {
$name=$_POST['name'];
$result4=mysqli_query($connect,"SELECT name,emergency FROM application where name='$name'");
$data4=mysqli_fetch_assoc($result4);


//$result=mysqli_query($connect,"SELECT name,emergency from application");
//$data=mysqli_fetch_assoc($result);
$name1= $data4['name'];
$emergency=$data4['emergency'];
        if($name==$name1)
        {
            $sql="INSERT INTO status(name,emergency,approval)  values('$name','$emergency','accepted')";
        if($result=mysqli_query($connect, $sql))
        {
            echo "Records inserted successfully.";
            header("location:statistic.php");
        }
        else
        {
            echo "failled to approve".mysqli_error($result);
        }
    }
        else
        {
            echo "applicant's name does not exit!";
        }
        
    }
 if(isset($_POST['deny']))
   {
$name=$_POST['name'];
$result4=mysqli_query($connect,"SELECT name,emergency FROM application where name='$name'");
$data4=mysqli_fetch_assoc($result4);


//$result=mysqli_query($connect,"SELECT name,emergency from application");
//$data=mysqli_fetch_assoc($result);
$name1= $data4['name'];
$emergency=$data4['emergency'];
      $sql="INSERT INTO status(name,emergency,approval)  values('$name','$emergency','denied')";
        if($name==$name1)
        {
           
        if($result=mysqli_query($connect, $sql))
        {
            echo "Records inserted successfully.";
            header("location:statistic.php");
        }
        else
        {
            echo "failled to approve".mysqli_error($result);
        }
    }
        else
        {
            echo "applicant's name does not exit!";
        }
        
    }
        if(isset($_POST['delete']))
   {
$name=$_POST['name'];



      $sql="delete from application where name='$name'";
        
        if($result=mysqli_query($connect, $sql))
        {
            echo "Records inserted successfully.";
            header("location:statistic.php");
        }
        else
        {
            echo "failled to approve".mysqli_error($result);
        }
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
   
 <div style="background-image: url('background.jpg');">
    </div>

</head>
<body>
 <div class="jumbotron text-center">
    <h1 style="color:#117A65">Request Approve or Delete</h1>
    </div>

<div class="container" >
    <div class="col-sm-6">
          
     
<form  class="jumbotron text-center"action="deleteapplication.php" method="post">
        
           <div class="form-group">
              
               <h3 style="color:green" class="font-weight-bold">name of the help seeker</h3>.<br>
                  <input class="form-control"type="text" name="name"placeholder="name">
    </div>
             <div class="form-group">
              
              
                <input type="submit" class="btn btn-success" name="accept" class="form-control"value="accept">
                  
     
            
               <input type="submit" class="btn btn-warning"name="deny"class="form-control" value="deny" >
               
                <input type="submit" class="btn btn-danger"name="delete"class="form-control" value="delete" >
           
           
            
        
       
     
        
        </div> 
        </form>   
        
    </div>
</div>



   

   
</body>
</html>
               
