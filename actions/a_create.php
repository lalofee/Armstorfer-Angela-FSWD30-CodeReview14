<?php

require_once 'dbconnect.php';

if($_POST) {

    $name = $_POST['name'];    
    $event_date = $_POST['event_date'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $capacity = $_POST['capacity'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $ZIP = $_POST['ZIP'];
    $city = $_POST['city'];
    $URL = $_POST['URL'];
    $type = $_POST['type'];

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
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">

    <title>Psy Events</title>

</head>

<body>

    <div class="container">
        <div class="alert alert-success" role="alert">

<?php
    $sql = "INSERT INTO event (name, event_date, description, image, capacity, email, phone, street, ZIP, city, URL, type) 

            VALUES ('$name', '$event_date', '$description', '$image', '$capacity', '$email', '$phone', '$street', '$ZIP', '$city', '$URL', '$type')";

    if($conn->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button class='btn btn-primary indigo-background white'>Back</button></a>";

        echo "<a href='../home.php'><button class='btn btn-primary indigo-background white'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $conn->connect_error;

    }

 

    $conn->close();

}
?>
        </div>
    </div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>

