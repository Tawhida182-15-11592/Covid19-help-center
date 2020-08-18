
<?php include "functio.php"?>

<?php include "condb.php"?>

<?php
// Include config file
require_once "condb.php";
 
// Define variables and initialize with empty values
$username = $password = $phone =$address=$email= "";
$username_err = $password_err  =$phone_err=$email_err=$add_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM signup WHERE username = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if(empty(trim($_POST["pass"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["pass"])) < 3){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["pass"]);
    }
    //phone validation
    if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter a phone.";     
    }
    else
    {
         $phone = trim($_POST["phone"]);
    }
    //email validation
  if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM signup WHERE email = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already used.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    //address validation
    if(empty(trim($_POST["address"]))){
        $add_err = "Please enter a address.";     
    }
    else
    {
        $address = trim($_POST["address"]);
    }
     if(empty($username_err) && empty($password_err) && empty($phone_err)&& empty($add_err)&&empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO signup(username,password,phone,address,email)  values(?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password,$param_phone,$param_address,$param_email);
            
            // Set parameters
            $param_username = $username;
            
            $param_password = $password; // Creates a password hash
            $param_phone=$phone;
            $param_address=$address;
            $param_email=$email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($connect);
}
?>
 



 
<style>
    .sty
    {
        font-family: :cursive;
         color: darkviolet;
         font-weight: 20px;
         
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
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500;600;700;800&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/85f3aaa0a1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">

</head>

<body>
   <div class="container">
    <div class="col-sm-6">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
       
        <h1 class="sty" class="form-head">Sign Up</h1>
                    

  

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            
           
             
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="pass" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            
              
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Contact Number</label>
                <input type="test" name="phone" class="form-control" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>
            
            <div class="form-group <?php echo (!empty($add_err)) ? 'has-error' : ''; ?>">
                <label>Area</label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                <span class="help-block"><?php echo $add_err; ?></span>
            </div>
            
            
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            
            
            <div class="field-group">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept terms
                    and conditions
                </div>
                <div class="form-group">
            
               <input type="submit" class="btn btn-success"name="submit"class="form-control" value="signup" >
               <input type="reset" class="btn btn-danger" value="Reset">
            </div>
           </div>
            
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
                   
    </form>
       </div>
    </div>
</body>
</html>