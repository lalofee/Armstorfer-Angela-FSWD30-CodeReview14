<?php
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

    <title>Psy Events  |  Delete Events</title>
</head>

<body>

	 <div class="container">
        <div class="alert alert-success" role="alert">

<h3>delete event</h3>



<form action="actions/a_delete.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <button class="btn btn-danger">Delete Event</button>
    <a href="home.php"><button type="button" class="btn btn-success">home</button></a>
</form>

</div>
</div>

</body>
</html>

