<?php include "condb.php"?>
<?php include "functio.php"?>
 <div class="container">
<?php
     $username=$pass="";
     $username_err=$pass_err="";
      

     session_start();
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     if(empty(trim($_POST['username'])))
     {
         $username_err="username field cannot be empty.";
     }
     else
     {
         $username=trim($_POST['username']);
     }
      if(empty(trim($_POST['pass'])))
     {
         $pass_err="password field cannot be empty.";
     }
     else
     {
         $pass=trim($_POST['pass']);
     }
     
     if(empty($username_err)&&empty($pass_err))
     {
                         
         $sql1="select name,pass from admin where name= ? and pass=?";                  
        $result = mysqli_prepare($connect, $sql1);
         
         if($result)
         {
             mysqli_stmt_bind_param($result, "ss", $param_username,$param_pass);
             $param_username=$username;
             $param_pass=$pass;
             mysqli_stmt_execute($result);
             mysqli_stmt_store_result($result);
             mysqli_stmt_bind_result($result,$username, $pass1);
             if(mysqli_stmt_fetch($result))
             {
                 if($pass=$pass1)
                 {
                     header("location: statistic.php");
                 }
                
                 
                     
                 
             }
         }
         else
         {
             echo "wrong information";
         }
     }
     else 
     {
         echo "fields cannot be empty";
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

</head>
    <body>
       <div class="container">
    <img src="white.jpg" alt="Notebook" style="width:110%;">
      <div class="content">
       
        <div class="jumbotron text-center">
        <h1>Admin Panel</h1>
        
         </div>
          <h2 class="head-text"> Enter your username and password!</h2>
        
    <div class="col-sm-6">
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         
         
          <div class="form-group <?php echo (!empty($uusername_err)) ? 'has-error' : ''; ?>">
               <label for="Name"style="color: white">Username</label>
               <input type="text" name="username" class="form-control" placeholder="Email" value="">
               <span class="help-block"><?php echo $username_err; ?></span>
           </div>
           <div class="form-group <?php echo (!empty($pass_err)) ? 'has-error' : ''; ?>">
              
               <label for="Pass"style="color: white">Password</label>
               <input type="password" name="pass"class="form-control"placeholder="Password">
               <span class="help-block"><?php echo $pass_err; ?></span>
           </div>
           <div class="form-group">
            
                <input type="submit" class="btn btn-primary"name="submit"class="form-control" value="login" >

           </div>
        </form>
           
           
            </div>
        </div>
        </div>
    </body>





            
           
   
            
    