<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("book_movie", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$id = $_POST['id'];

if($id !=''){
//Insert Query of SQL
$query = mysql_query("delete from movies where movie_id=('$id')");
echo "<br/><br/><br/><br/><br/><br/><br/><br/><p>Data Deleted successfully...!!</p>";
}
else{
echo "<br/><br/><br/><br/><br/><br/><br/><br/><p>Deletion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
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
      <li><a href="user.php">Home</a></li>
      <li><a href="buy.php">Buy Ticket</a></li> 
      <li class="active"><a href="cancel.php">Cancel Ticket</a></li> 
      <li><a href="cart.php">Cart</a></li> 
       <li><a href="login.php">Log Out</a></li> 
    </ul>
  </div>
</nav>
 </div>  
 <br>
 <br>
 <br>
 <br>

  <p class="about"> Welcome <?php session_start(); echo $_SESSION['username']; ?> !</p>
  <br>
  <br>
  
  <p class="about1" align="center">------------ Cancel Ticket ------------</p>
  <form role="form" action="cancel.php" method="post">
   <div class="form-group">
    <label for="id">Movie ID (Unique):</label>
    <input type="number" class="form-control" name="id">
  </div>
 
  <button type="submit" class="btn btn-default" name="submit">Cancel Ticket</button>
</form>

  


 
    </body>

</html>