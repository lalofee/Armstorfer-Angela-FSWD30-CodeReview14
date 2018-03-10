<?php

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

    <title>Psy Events</title>

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
    <h2>Welcome - <?php echo $userRow['userName']; ?></h2>  
    <h3>here you can add, delete and edit the events</h3>        
</div>
        



<!---//////////////////________Start of Table____show Event Data_____///////////////////-->
<div class="container-fluid">
   <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Capacity</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Street</th>
                    <th>ZIP</th>
                    <th>City</th>
                    <th>URL</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>    
    <?php

     $sql = "SELECT * FROM event";

     $result = $conn->query($sql);

                if($result->num_rows > 0) { //für admin
                   
                    while($row = $result->fetch_assoc()) {
                            
                            echo 

                           "<tr>
                            <td><img src='" . $row["image"] ."' class='images-responsive' ' style='width:100%'></td>
                            <td>".$row['name']."</td>
                            <td>".$row['event_date']."</td>
                            <td>".$row['description']." </td>
                            <td>".$row['capacity']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['phone']."</td>
                            <td>".$row['street']."</td>
                            <td>".$row['ZIP']."</td>
                            <td>".$row['city']."</td>
                            <td>".$row['URL']."</td>
                            <td>".$row['type']."</td>
                            <td>
                                <a href='update.php?id=".$row['id']."'><button type='button' class='btn-success'>Edit</button></a>
                                <a href='delete.php?id=".$row['id']."'><button type='button' class='btn-danger'>Delete</button></a>
                            </td>
                        </tr>";
                    }
                }else {
                    echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
                }
            ?>
            </tbody>
        </table>
    
    </div>








 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>










