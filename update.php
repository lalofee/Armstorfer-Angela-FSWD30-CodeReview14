<?php
require_once 'actions/dbconnect.php';

if($_GET['id']) {
    
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM event WHERE id = {$id}";
    
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $conn->close();
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


<body>
 
<div class="container-fluid">

 <h3>here you can edit events</h3>   

    <form action="actions/a_update.php" method="post">

       <table class="table table-hover table-responsive">
            
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" placeholder="Name" value="<?php echo $data['name'] ?>" /></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><input type="text" name="event_date" placeholder="Date" value="<?php echo $data['event_date'] ?>" /></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><input type="text" name="description" placeholder="Description" value="<?php echo $data['description'] ?>" /></td>
            </tr>
            <tr>
                <th>Image</th>
                <td><input type="text" name="image" placeholder="Image Link" value="<?php echo $data['image'] ?>" /></td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td><input type="text" name="capacity" placeholder="Capacity" value="<?php echo $data['capacity'] ?>" /></td>
            </tr> 
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" placeholder="Email" value="<?php echo $data['email'] ?>" /></td>
            </tr> 
            <tr>
                <th>Phone</th>
                <td><input type="text" name="phone" placeholder="Phone" value="<?php echo $data['phone'] ?>" /></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="street" placeholder="Street and number" value="<?php echo $data['street'] ?>" /></td>
            </tr>
            <tr> 
                <th>Postal Code</th>   
                <td><input type="text" name="ZIP" placeholder="ZIP" value="<?php echo $data['ZIP'] ?>" /></td>
            </tr>  
                <th>City</th>  
                <td><input type="text" name="city" placeholder="City" value="<?php echo $data['city'] ?>" /></td>
            </tr>
            <tr>
                <th>URL</th>
                <td><input type="text" name="url" placeholder="URL" value="<?php echo $data['URL'] ?>" /></td>
            </tr> 
            <tr>
                <th>Type</th>
                <td><input type="text" name="type" placeholder="type" value="<?php echo $data['type'] ?>" /></td>
            </tr> 
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit" class="btn btn-primary">Save Changes</button></td>
                <td><a href="home.php"><button type="button" class="btn btn-secondary">Back</button></a></td>
            </tr>
        </table>
    </form>
</div>
 


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

 

<?php

}

?>