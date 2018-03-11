<?

 ob_start();

 session_start();

 require_once 'actions/dbconnect.php';

 

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {

  header("Location: index.php");

  exit;

 }

 // select logged-in users detail
 $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);

 $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);



    $name = "";    
    $event_date = "";
    $description = "";
    $image = "";
    $capacity = "";
    $email = "";
    $phone = "";
    $street = "";
    $ZIP = "";
    $city = "";
    $URL = "";
    $type = "";
    $id = "";


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <title>Psy Events  |  Add Events</title>
</head>

<body>
    

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.php">Psy Events</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="">Administration</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php?logout">Sign Out</a></li>
                </ul>
      </div>
    </div>
  </nav>



<div>   
    <h3>here you can add events</h3>        
</div>


 

<div class="container">
        <form action="actions/a_create.php" method="post">
        <table cellspacing="0" cellpadding="0" class="table">
            
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" placeholder="Name"/></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><input type="text" name="event_date" placeholder="Date"/></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><input type="text" name="description" placeholder="Description"/></td>
            </tr>
            <tr>
                <th>Image</th>
                <td><input type="text" name="image" placeholder="Image Link"/></td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td><input type="text" name="capacity" placeholder="Capacity"/></td>
            </tr> 
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" placeholder="Email"/></td>
            </tr> 
            <tr>
                <th>Phone</th>
                <td><input type="text" name="phone" placeholder="Phone"/></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="street" placeholder="Street and number"/></td>
            </tr>
            <tr> 
            	<th>Postal Code</th>   
                <td><input type="text" name="ZIP" placeholder="ZIP"/></td>
            </tr>  
            	<th>City</th>  
                <td><input type="text" name="city" placeholder="City"/></td>
            </tr>
            <tr>
                <th>URL</th>
                <td><input type="text" name="url" placeholder="URL"/></td>
            </tr> 
            <tr>
                <th>Type</th>
                <td><input type="text" name="type" placeholder="type"/></td>
            </tr> 
            <tr>
                <td><button type="submit" class="btn btn-primary indigo-background white">Add Event</button></td>
                <td><a href="home.php"><button type="button" class="btn btn-primary indigo-background white">Back</button></a></td>
            </tr>
        </table>
    </form>

 



 

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>
