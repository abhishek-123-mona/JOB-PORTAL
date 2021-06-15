<?php
session_start();
include('connection/db.php'); 

      $login=  $_SESSION['email'];

     $job_title=$_POST['job_title'];
      $Description=$_POST['Description'];
      $country=$_POST['country'];
   $state=$_POST['state'];
     $city=$_POST['city'];
  
    // echo  $login= $_SESSION['email'];
    //  echo  $job_title=$_POST['job_title'];
    //  echo  $Description=$_POST['Description'];
    //  echo  $country=$_POST['country'];
    //  echo  $state=$_POST['state'];
    // echo  $city=$_POST['city'];

$query= mysqli_query($conn,"insert into all_jobs(customer_email,job_title,des,country,state,city)values('$login','$job_title',$Description','$country','$state','$city')");
// var_dump($query);
if ($query) {
	echo " Data has been successfully Inserted ";
	 
	 }else{
	echo " some error try again ";
}
?>
		