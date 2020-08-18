<?php include "condb.php"?>
<?php
$t_user=$t_volun=$t_medic=$t_don=$app_help=$t_dealer="";



$result=mysqli_query($connect,"SELECT count(email) as total from signup");
$data=mysqli_fetch_assoc($result);
$t_user= $data['total'];

$result1=mysqli_query($connect,"SELECT count(role) as total from assistance where role='volunteer'");
$data1=mysqli_fetch_assoc($result1);
$t_volun= $data1['total'];

$result2=mysqli_query($connect,"SELECT count(role) as total from assistance where role='medical help'");
$data2=mysqli_fetch_assoc($result2);
$t_medics= $data2['total'];

$result3=mysqli_query($connect,"SELECT count(role) as total from assistance where role='donnation'");
$data3=mysqli_fetch_assoc($result3);
$t_don= $data3['total'];

$result4=mysqli_query($connect,"SELECT count(name) as total from application ");
$data4=mysqli_fetch_assoc($result4);
$app_help= $data4['total'];

$result5=mysqli_query($connect,"SELECT count(role) as total from assistance where role='online seller' ");
$data5=mysqli_fetch_assoc($result5);
$t_dealer= $data5['total'];




?>
<?php
 
$dataPoints = array( 
	array("y" => $t_user, "label" => "users" ),
	array("y" => $t_volun, "label" => "volunteers" ),
	array("y" => $t_medics, "label" => "medics" ),
	array("y" => $t_don, "label" => "donnators" ),
	array("y" => $t_dealer, "label" => "online dealer" ),
    array("y" => $app_help, "label" => "help requests" ),
	);
 
?>
<!DOCTYPE HTML>
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
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Current Status"
	},
	axisY: {
		title: "total numbers"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## persons",
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
<div></div>.<br>


<p>
        <a href="emergencylist.php" class="btn btn-info ">list of emergency request</a>
         <a href="deleteapplication.php" class="btn btn-warning "> Approval of Request Application</a>
         <a href="assistants.php" class="btn btn-info ">Information of assistants</a>
          <a href="deleteassistants.php" class="btn btn-warning "> delete assistants</a>
         
        <a href="adminupdatepass.php" class="btn btn-info ">update password </a>.<br>
        <div></div>
         <a href="logout.php" class="btn btn-danger btn-lg">log out</a>
    </p>
    

    
</body>
</html>        