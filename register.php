<?php

 ob_start();

 session_start(); // start a new session or continues the previous

 if( isset($_SESSION['user'])!="" ){

  header("Location: home.php"); // redirects to home.php

 }

 include_once 'dbconnect.php';


 $error = false;


 if ( isset($_POST['btn-signup']) ) {

 

  // sanitize user input to prevent sql injection

  $name = trim($_POST['name']);

  $name = strip_tags($name);

  $name = htmlspecialchars($name);

 

  $email = trim($_POST['email']);

  $email = strip_tags($email);

  $email = htmlspecialchars($email);

 

  $pass = trim($_POST['pass']);

  $pass = strip_tags($pass);

  $pass = htmlspecialchars($pass);

 

  // basic name validation

  if (empty($name)) {

   $error = true;

   $nameError = "Please enter your full name.";

  } else if (strlen($name) < 3) {

   $error = true;

   $nameError = "Name must have atleat 3 characters.";

  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {

   $error = true;

   $nameError = "Name must contain alphabets and space.";

  }

 

  //basic email validation

  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {

   $error = true;

   $emailError = "Please enter valid email address.";

  } else {

   // check whether the email exist or not

   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";

   $result = mysqli_query($conn, $query);

   $count = mysqli_num_rows($result);

   if($count!=0){

    $error = true;

    $emailError = "Provided Email is already in use.";

   }

  }


  // password validation

  if (empty($pass)){

   $error = true;

   $passError = "Please enter password.";

  } else if(strlen($pass) < 6) {

   $error = true;

   $passError = "Password must have atleast 6 characters.";

  }

 

  // password encrypt using SHA256();

  $password = hash('sha256', $pass);

 

  // if there's no error, continue to signup

  if( !$error ) {

   

   $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";

   $res = mysqli_query($conn, $query);

   

   if ($res) {

    $errTyp = "success";

    $errMSG = "Successfully registered, you may login now";

    unset($name);

    unset($email);

    unset($pass);

   } else {

    $errTyp = "danger";

    $errMSG = "Something went wrong, try again later...";

   }
  }
 }
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

    <title>Login & Registration System</title>

</head>

<body>
    
 




<form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

<h2>Register</h2>
             <hr />
         

             <?php

   if ( isset($errMSG) ) {
    ?>
             <div class="alert">
 <?php echo $errMSG; ?>

             </div>
 <?php

   }
   ?>
  

    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="name" id="usr" placeholder="Enter Name" value="<?php echo $name ?>" maxlength="50"/>
      
    </div>

    <div class="form-group">
      <label for="usr">Email:></label>
      <input type="email" name="email" class="form-control" id="usr" placeholder="Enter Your Email" value="<?php echo $email; ?>" maxlength="50"/>
      
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
      <span class="text-danger"><?php echo $passError; ?></span>
    </div>
      <button type="submit" class="btn btn-primary" name="btn-signup">Register</button>
      <a href="index.php">Login Here...</a>
</form>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>