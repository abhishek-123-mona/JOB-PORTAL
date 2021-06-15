<h1></h1>
<?php 
session_start();
 ?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin login</title>
     <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
     

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/admin_login.css" rel="stylesheet">
 <!-- <script src="js/admin_login.js"></script> -->
 <style>
       body::after{
            background: url('https://source.unsplash.com/random') no-repeat center center/cover;
            content: "";
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -3;
            opacity: 0.9;
        }
        form{
            color: rgb(4, 18, 43);
          box-shadow: 0px 2px 25px cyan;
           font-family: 'Bree Serif', serif;
           background-color: rgb(184, 180, 180);
           border-radius: 20px;
                  }
        #submit{
          background-color:  rgb(60, 60, 87);
        }
        #submit:hover{
          background-color: grey;
          color: black;
        }
        form p{
             text-shadow:-1px -2px 3px green;
        }
        h1{
          text-shadow:-1px -2px 3px blue;
        }
        form p:hover{
           
          color: white;
        }
        ul{
          text-shadow:-2px 0px 3px white;
        }
        ul:hover{
          color: grey;
        }

 </style>
  </head>

  <body class="text-center">
    <!-- <ul><li><h2>This is joker's Website</h2></li></ul> -->
    <form class="form-signin" id="admin_ login" method="post" action="admin_login.php" name="admin_login" >
      <img class="mb-4" src="img/logo.png" alt="" width="200" height="200">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email"name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password"name="pass" id="pass" class="form-control" placeholder="Password" required>
      
      <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit" placeholder="sign in"><br> 
      <p class="cool" >&copy; 2020-2021</p>
    </form> 
  </body>
</html>

 <?php 
 include('connection/db.php'); 

 if(isset($_POST['submit'])){
  echo $email=$_POST['email'];
   echo $pass=$_POST['pass'];

   $query=mysqli_query($conn,"select * from admin_login where admin_email='$email' and admin_pass='$pass' ");
   if ($query) {
     # code...
   
  if(mysqli_num_rows($query)>0){
    $_SESSION['email']=$email;
    header('location:admin_dashboard.php');

  }else{
    echo "<script>alert('Email or password is incorect,Please try again')</script>";
  }
}
 }

  ?>