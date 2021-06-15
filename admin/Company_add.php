<?php
include ('connection/db.php'); 
$Company=$_POST['Company'];
 $Description=$_POST['Description'];
  

$query=mysqli_query($conn,"insert into Company(company,des)values('$Company','$Description')");
var_dump($query);
if ($query) {
	echo "<div class='alert alert-success'>Data has been successfully Inserted</div>";
	# code...
}else{
	echo "<div class='alert alert-success'>some error try again</div>";
}
 ?>
