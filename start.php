<?php include "condb.php"?>
<?php
    
$result=mysqli_query($connect,"SELECT count(approval) as total from status where approval='accepted'");
$data=mysqli_fetch_assoc($result);
$t_accep= $data['total'];

$result1=mysqli_query($connect,"SELECT count(approval) as total from status where approval='denied'");
$data1=mysqli_fetch_assoc($result1);
$t_deny= $data1['total'];
    ?>
<?php
 
$dataPoints = array( 
	array("label"=>"Response t0 Help", "y"=>$t_accep),
	array("label"=>"could not response", "y"=>$t_deny)
	)

 
?>
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500;600;700;800&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/85f3aaa0a1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 15px sans-serif; text-align: center; }
    </style>
    
    
     <img src="corona.jpg" width=98%  height=400  alt="Responsive image">
   

        <div class="jumbotron text-center">
       
  <h1>Covid-19 Help Centre</h1>
  <p>your help can save a life... &#128519;</p>
  
</div>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Response of People getting help"
	},
	data: [{
		type: "doughnut",
		indexLabel: "{symbol} {y}",
		yValueFormatString: "#,##\"persons\"",
		showInLegend: true,
		legendText: "{label} : {y}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
  
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="container">
 
  <div class="row">
    <div class="col-sm-6">
      <font color="white"><h2 style="background:black">Admin Login</h2></font>
      <p>if you ara an adming login first... </p>
      <a href="admin.php" class="btn btn-info btn-lg">login</a>
    </div>
    <div class="col-sm-6">
      <font color="white"><h2 style="background:black">User Login</h2></font>
      <p>if you want to be an assistant or want any kind of help login first....</p>
      <a href="login.php" class="btn btn-info btn-lg">login</a>
    </div>
      </div>
    
   <footer>
  <p>creator: Tawhida Bintay Kabir<br>
     website: <a href="https://sites.google.com/diu.edu.bd/tawhidabintaykabir/home?authuser=0">googlesite link</a><br>
     Email:
  <a href="mailto:Tawhida15-11592@diu.edu.bd">Tawhida15-11592@diu.edu.bd</a></p>
</footer>

    

</div>
       

         
        
    
</body>
</html>