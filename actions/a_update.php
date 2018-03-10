
<?php

 

require_once 'dbconnect.php';

echo "verbunden";

if($_POST) {

    $userName = $_POST['userName'];

    $userEmail = $_POST['userEmail'];

    $userPass = $_POST['userPass'];

 

    $id = $_POST['id'];

 

    $sql = "UPDATE users SET userName = '$userName', userEmail = '$userEmail', userPass = '$userPass' WHERE id = {$id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();

 

}





 

// if($_POST) {

//     $name = $_POST['name'];    
//     $event_date = $_POST['event_date'];
//     $description = $_POST['description'];
//     $image = $_POST['image'];
//     $capacity = $_POST['capacity'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $street = $_POST['street'];
//     $ZIP = $_POST['ZIP'];
//     $city = $_POST['city'];
//     $URL = $_POST['URL'];
//     $type = $_POST['type'];

//     $id = $_POST['id'];

 

//     $sql = "UPDATE event SET name = '$name', event_date = '$event_date', description = '$description', image = '$image', 
//                              capacity = '$capacity', email = '$email', phone = '$phone', street = '$street', ZIP = '$ZIP',
//                              city = '$city', URL = '$URL', type = '$type' WHERE  id = {$id}";

//     if($conn->query($sql) === TRUE) {

//         echo "<p>Succcessfully Updated</p>";

//         echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";

//         echo "<a href='../index.php'><button type='button'>Home</button></a>";

//     } else {

//         echo "Erorr while updating record : ". $conn->error;

//     }

 

//     $conn->close();

 

// }

 

?>