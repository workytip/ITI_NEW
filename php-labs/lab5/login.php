<?php
session_start();

$server   = "localhost";
$database = "labsdb";
$username = "root";
$password = "";


try {
  $con = mysqli_connect($server, $username, $password, $database);

  if (!$con) {

    throw new Exception('Not Connected ' . mysqli_connect_error());
  }
} catch (Exception $e) {
  echo $e->getMessage();
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // CODE .... 
    $username     = $_POST['name'];
    $password = $_POST['password'];

    $query = "select * from myusers where username = '$username' and password='$password'";
    $op =  mysqli_query($con, $query);
    if ($op) {
        if($row = mysqli_fetch_assoc($op)){

             $_SESSION['username'] =$username;
             header("Location: index.php");

        }
        else {
            echo 'Sorry Incorrect Email or password ';
        } 
    } else {
        echo "Failed , " . mysqli_error($con);
    }
    
         
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Log in</h2>
        <!-- action.php -->
        <form method="post" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>">

            <div class="form-group ">
                <label for="exampleInputName"> User Name</label>
                <input type="text" class="form-control " name="name" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword"> Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <p>sign up for free <a href="signup.php">Sign Up</a></p>
        </form>
    </div>

</body>

</html>