<?php include "functio.php"?>

<?php include "condb.php"?>

<?php

 
// Define variables and initialize with empty values
$username = $mem = $phone =$address=$email= $emergency=$help="";
$username_err = $mem_err  =$phone_err=$email_err=$add_err=$emergency_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
                    $username = trim($_POST["username"]);
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
        $email_err = "Please enter a email!";
        
        
        
                } else{
                    $email = trim($_POST["email"]);
                }
             
    //address validation
    if(empty(trim($_POST["address"]))){
        $add_err = "Please enter a address.";     
    }
    else
    {
        $address = trim($_POST["address"]);
    }
     if(empty(trim($_POST["mem"]))){
        $mem_err = "Please enter number of your family members.";     
    }
    else
    {
        $mem = trim($_POST["mem"]);
    }
    if(empty(trim($_POST["emergency"]))){
        $emergency_err = "Please specify your emergency type.";     
    }
    else
    {
        $emergency = trim($_POST["emergency"]);
    }
      $help = trim($_POST["help"]);
    
     if(empty($username_err) && empty($mem_err) && empty($phone_err)&& empty($add_err)&&empty($email_err) && empty($emergency_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO application(name,phone,member,area,email,emergency,help)  values(?,?,?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss",$param_username,$param_phone,$param_mem,$param_address,$param_email,$param_emergency,$param_help);
            
        
            $param_username = $username;
            
          
            $param_phone=$phone;
            $param_address=$address;
            $param_email=$email;
            $param_mem=$mem;
            $param_emergency=$emergency;
            $param_help=$help;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: welcome.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

        
            
        }
         mysqli_stmt_close($stmt);
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
          border-bottom-style: double;
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
   <div class="container-fluid  bg-light  p-5 my-3">
    <div class="col-sm-6" >
     <h1 class="sty" class="form-head">Apply for Emmergency Help </h1><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      
        
                    

  

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label style="color: blue">Full Name</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            
           
         
            
              
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label style="color: blue">Contact Number</label>
                <input type="test" name="phone" class="form-control" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>
            
            <div class="form-group <?php echo (!empty($add_err)) ? 'has-error' : ''; ?>">
                <label style="color: blue">Area</label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                <span class="help-block"><?php echo $add_err; ?></span>
            </div>
            
            
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label style="color: blue">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
             <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label style="color: blue">Family Member</label>
                <input type="text" name="mem" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $mem_err; ?></span>
            </div>
             <div class="form-group<?php echo (!empty($emergency_err)) ? 'has-error' : ''; ?>">
                   <label for="emergency" style="color:blue"> Specific emergency:</label>
                    <select id="emergency" name="emergency">
                    <option value="food relief"> food relief</option>
                     <option value="financial aid">financial help</option>
                     <option value="corona test">corona test</option>
                      <option value="ambulance ">ambulance</option>
                    </select>
                    
                </div>
                <div>
              <label style="color:blue"for="w3review">discribe your problem:</label><br>

              <textarea id="help" name="help" rows="4" cols="50">

             </textarea>
             <p>your identity will be confidential!</p>
            
                    
                </div>
             
            
            <div class="field-group">
                
                <div class="form-group">
            
               <input type="submit" class="btn btn-success"name="submit"class="form-control" value="Complete" >
               <input type="reset" class="btn btn-danger" value="Reset">
            </div>
           </div>
            
                <p style="color: red">go to home page <a href="welcome.php">Exit</a>.</p>
                   
    </form>
       </div>
       
    </div>
</body>
</html>