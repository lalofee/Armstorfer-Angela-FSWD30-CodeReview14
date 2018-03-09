<?php

 ob_start();

 session_start();

 require_once 'dbconnect.php';

 

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <title>Home Big Events</title>

</head>

<body>


             

        <a href="logout.php?logout">Sign Out</a>

<!---//////////////////End of Jumbotron///////////////////-->


<!---//////////////////Start of Table///////////////////-->
<?php

$sql = "SELECT media.title, author.author_surname, author.author_name, media.image, media.short_description, publisher.publisher_name, media.ISBN
		FROM media 
		INNER JOIN author ON media.fk_author_ID = author.author_ID
		INNER JOIN publisher ON media.fk_publisher_ID = publisher.publisher_ID";

$result = mysqli_query($conn, $sql);


echo

"<div class='container'>
   <table class='table table-dark table-hover'>
    <thead>
      <tr>
        <th>Title</th>
        <th>Authors Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Publisher</th>
        <th>ISBN</th>
      </tr>
    </thead>";

// fetch a next row (as long as there are some) into $row
while($row = mysqli_fetch_assoc($result)) {

	echo

    "<tbody>
      <tr>
        <td>" . $row["title"] . "</td>
        <td>" . $row["author_surname"] . " " . $row["author_name"] . "</td>
        <td><img class='img' src='" . $row["image"] . "'/></td>
        <td>" . $row["short_description"] . "</td>
        <td>" . $row["publisher_name"] . "</td>
        <td>" . $row["ISBN"] . "</td>
      </tr>";
}

echo "</tbody></table></div>";

// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);

?>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php ob_end_flush(); ?>





