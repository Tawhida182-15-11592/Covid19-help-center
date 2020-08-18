
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>




 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500;600;700;800&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/85f3aaa0a1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">
  <style>
      <script src="https://kit.fontawesome.com/yourcode.js"></script>
  body {
      position: relative; 
  }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

   
    <div class="jumbotron text-center">
        <font color="white"><marquee direction="left" behavior="alternate"style="background:black"><h1>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to COVID-19 Help Center.&#10084</h1></marquee></font>
    </div>
    <div>
        <font color="white"> <marquee direction="alternative"style="background:Red"><h3> Hotline Numbers: National Call Center:333, ICDR:10655, healthline: 09611677777, helpline:109</h3></marquee></font>
    </div>
<img src="covid1.jpg"  class="float-center">
    

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#section1" style="color:white">Apply for assistance</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section2" style="color:white">Emergency Help</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section3" style="color:white">Check Status</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white">Search
    
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#section41" >volunteers</a>
        <a class="dropdown-item" href="#section42" >Online medical help</a>
        <a class="dropdown-item" href="#section43" >online seller</a>
         <a class="dropdown-item" href="searchHospital.php">Hospitals </a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="coronaupdate.php" style="color:white">CORONA UPDATE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section5" style="color:white">Logout</a>
    </li>
  </ul>
</nav>

<div id="section1" class="container-fluid bg-secondary" style="padding-top:70px;padding-bottom:70px">
<h1> Apply for assistants &#128221</h1>
  
  <p>If you want to give help please come forward and fillup the form to become an assistant of helpless people!</p>
   <a href="applyforAssistance.php" class="btn btn-info btn-lg">Apply For Assistance&#9989</a>.<br>
</div>
<div id="section2" class="container-fluid bg-info" style="padding-top:70px;padding-bottom:70px">
  <h1>Apply for Emergency Help !&#128567</h1>
  <p>If you are seeking any kind of help just know there are people who are eager to help you for more details just fill up the form below!</p>
   <a href="applyforhelp.php" class="btn btn-danger btn-lg"> Emergency Help&#10071</a>.<br>
</div>
<div id="section3" class="container-fluid bg-secondary" style="padding-top:70px;padding-bottom:70px">
  <h1>Staus list  &#128276 </h1>
  <p>cheque the status of your request!</p>
  <a href="status.php" class="btn btn-success btn-lg">check status&#9989</a>.<br>
</div>
<div id="section41" class="container-fluid bg-info" style="padding-top:70px;padding-bottom:70px">
  <h1>Search for volunteers &#128587</h1>
  <p>if you are lockdown at your home our volunteers will help you to do your emergency stuff!</p>
  <a href="search.php" class="btn btn-warning btn-lg">Serach for Volunteers&#128269</a>.<br>
 
</div>
<div id="section42" class="container-fluid bg-secondary" style="padding-top:70px;padding-bottom:70px">
  <h1>Search for medical Help &#128657</h1>
  <p>are you feeling sick ? need medicine ? call our medics!!</p>
  <a href="serachmedic.php" class="btn btn-success btn-lg">Serach for Medical Help&#128269</a>.<br>
 
</div>
<div id="section43" class="container-fluid bg-info" style="padding-top:70px;padding-bottom:70px">
  <h1>Search for online dealers &#128722</h1>
  <p>They will buy your stuffs and send it to your address!!</p>
  <a href="searchonlineseller.php" class="btn btn-danger btn-lg"> search &#128269</a>.<br>
  
</div>
<div id="section5" class="container-fluid bg-danger" style="padding-top:70px;padding-bottom:70px">
  <h1>logout!!&#10060</h1>
  <p>logging out!</p>
   <a href="logout.php" class="btn btn-warning btn-lg">log out &#10060</a>
   
</div>
  <footer>
  <p class="text-center">creator: Tawhida Bintay Kabir<br>
     website: <a href="https://sites.google.com/diu.edu.bd/tawhidabintaykabir/home?authuser=0">googlesite link</a><br>
     Email:
  <a href="mailto:Tawhida15-11592@diu.edu.bd">Tawhida15-11592@diu.edu.bd</a></p>
</footer>

    

</body>