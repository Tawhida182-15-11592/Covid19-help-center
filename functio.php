<?php include "condb.php"?>


 <?php
   
function update()
{
     global $connect; 
    $name=$_POST['name'];
    $pass=$_POST['pass'];
  
  
    
    $query="update admin set  pass='$pass' where name='$name'";
    $result=mysqli_query($connect,$query);
    if(!$result)
    {
        die("query failled".mysqli_error($connect));
    }
}
function delete()
{
     global $connect; 
   // $email=$_POST['email'];
    //$pass=$_POST['password'];
  
    $username=$_POST['username'];
    
    $query="delete from signup  where username=$username";
    $result=mysqli_query($connect,$query);
    if(!$result)
    {
        die("query failled".mysqli_error($connect));
    }
}
 

?>
 <style>
  .head-text {
       font-family: :cursive;
        
         font-weight: 20px;
      font-size: 30px;
      padding-left: 150px;
      margin:auto;
    
     
  }

     .head-text1
     {
         font-family: :cursive;
         
         font-weight: 20px;
         padding-left: 5px;
         padding-top: 15px;
         margin:auto;
     
     }
    .container {
  position: relative;
  max-width: 800px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.container .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: black; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}
      {box-sizing: border-box}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
    width: 100%;
  }
}
     
</style>
 
    
    
      



            
         
  

