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

 

    $sql = "INSERT INTO event (name, event_date, description, image, capacity, email, phone, street, ZIP, city, URL, type) 

            VALUES ('$name', '$event_date', '$description', '$image', '$capacity', '$email', '$phone', '$street', '$ZIP', '$city', '$URL', '$type')";

    if($conn->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $conn->connect_error;

    }

 

    $conn->close();

}

 

?>