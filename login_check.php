<?php
// Start the session
session_start();
?>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="book_movie"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 


$sql="SELECT * FROM logginers WHERE UserName='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
if($myusername == 'Mohith' and $mypassword='mohithnit')
{
  header("location:admin.php");
  session_start();
  $_SESSION['admin'] = $myusername;
  break;
}

else if($myusername == 'Sameer' and $mypassword='7483')
{
  header("location:admin.php");
  session_start();
  $_SESSION['admin'] = $myusername;
  break;
}
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php".
  session_start();
 $_SESSION['username'] = $myusername;

header("location:user.php");
}
else {
echo "Wrong Username or Password";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> BOOK YOUR MOVIE ! </title>
   <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- jQuery 1.11.1 (Compatible with countdown timer - DO NOT change order of scripts) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style_sheet.css">
   <link rel="icon" type="image/jpg" sizes="16x16" href="images/logo.jpg">


  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">BOOK YOUR MOVIE</a>
    </div>
       <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
      <li><a href="login.php">Sign Up</a></li>
      <li class="active"><a href="login_check.php">Login</a></li> 
     
    </ul>
  </div>
</nav>
 </div>  

 <br>
 <br>
 <br>
 <br>

  <p class="about" align="center"> Welcome To BOOK YOUR MOVIE !</p>
  
  <br>
  <br>
   <div class="row">
      <div class="col-md-2" ></div>
      <div class="col-md-8" >    <div class="wrapper">
    <form class="form-signin" action="login_check.php" method="post">       
      <h2 class="form-signin-heading">Login</h2>
      <br>
       
      <input type="text" class="form-control" name="username"  />
       <br>
        
      <input type="password" class="form-control" name="password" />      
      <br>
       
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>   
    </form>
  </div></div>


  </div></div>
      <div class="col-md-2" ></div>
    </div>



  


 
    </body>

</html>