<?php include "condb.php"?>
<?php include "functio.php" ?>


  <?php  
session_start();

     $email=$pass=$username="";
     $email_err=$pass_err="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty(trim($_POST['email'])))
    {
        $email_err="email field cannot be empty!";
    }
    else
    {
        $email=trim($_POST['email']);
    }
    
    if(empty(trim($_POST['pass'])))
    {
        $pass_err="password field cannot be empty!";
    }
    else
    {
        $pass=trim($_POST['pass']);
    }
    
     if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id,email,password FROM signup WHERE email = ?";
      
       
       
        
                           
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            
            
            // Set parameters
            $param_email = $email;
            
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id,$email, $password);
                    
                    
                     
                    if(mysqli_stmt_fetch($stmt)){
                        if($pass== $password){
         $sql1="select username from signup where email='$email'";                  
        $result = mysqli_query($connect, $sql1);
         $obj =  mysqli_fetch_assoc($result);
         $username=$obj["username"];
         
                           
                            // Password is correct, so start a new session
                            session_start();
                           
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email; 
                            $_SESSION["username"] = $username; 
                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $pass_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($connect);
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
    <div class="container">
    <img src="white.jpg" alt="background white"  style="width:110%;">
    <div class="content">
 
     
       <div class="jumbotron text-center">
        <h1 style="color:#117A65 ">Login to start</h1>
        
         </div>
         <h2 style="color:#FDFEFE  "> Enter your email and password!</h2>
        
    <div class="col-sm-6">
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         
         
          <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
               <label for="Email"style="color: white">Email</label>
               <input type="text" name="email" class="form-control" placeholder="Email" value="">
               <span class="help-block"><?php echo $email_err; ?></span>
           </div>
           <div class="form-group <?php echo (!empty($pass_err)) ? 'has-error' : ''; ?>">
              
               <label for="Pass"style="color:white">Password</label>
               <input type="password" name="pass"class="form-control"placeholder="Password">
               <span class="help-block"><?php echo $pass_err; ?></span>
           </div>
           <div class="form-group">
            
                <input type="submit" class="btn btn-primary"name="submit"class="form-control" value="login" >

           </div>
           
           <h1 style="color:white"> Signup first if you are new!</h1>.<br>
           <p style="color: white">create an accout<a href ="signup.php">Signup page</a></p>
        </form>
                            <span class="spinner-border spinner-border-sm"></span>
  Loading..
            </div>
        
        </div>
        </div>
    </body>



            
           
   
            
    