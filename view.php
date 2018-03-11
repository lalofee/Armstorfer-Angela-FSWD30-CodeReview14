<?php 
session_start();
require_once 'actions/dbconnect.php';

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

    <main role="main">

  <!-- ################################################################################# -->
  <!--                                MAIN JUMBOTRON                                     --> 
  <!-- ################################################################################# -->
      <div class="jumbotron">
        <div class="container" id="title">
          <h1 class="display-3">Psy Events</h1>
          <p>Partys, People and more...</p>
        </div>
      </div>

  <!-- ################################################################################# -->
  <!--                                  Container for EVENT                              --> 
  <!-- ################################################################################# -->
      <div class="container"> 
        <div class="row">

    <?php
    if($_GET) {
    $evId = $_GET['id'];
}
    $sql = "SELECT * FROM `event` WHERE id = {$evId}";
    
    $result = $conn->query($sql);
    
    if($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

        echo 
        
        "<div class='row'>
         <div class='col>
         <img src='" . $row['image'] . "' class='img-responsive' style='width:100%' >
         </div>
         <div class='col'>
            <h4>" . $row['name'] . "</h4><br>
            <p>" . $row['event_date'] . "<br> <br>
            " . $row['description'] . "<br>
            " . $row['capacity']." <br>
            " . $row['email'] . " <br>
            " . $row['phone'] . " <br>
            " . $row['street'] . "<br> 
            " . $row['ZIP']." <br>
            " . $row['city']." <br>
            " . $row['URL']." <br>
            </p>
            </div>
            
           <a href='index.php'><button class='btn btn-primary indigo-background white'>Back</button></a>
        
       </div>
     ";
    }
    } else {
    echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
}
?>    
</div>
</div> 

</main> 

    <footer class="container">
      <p>&copy; polypixx - 2018</p>
      <p>all pictures &copy;  by Angela Armstorfer</p>
    </footer> 
  


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html