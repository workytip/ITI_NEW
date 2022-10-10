<?php
  //open & close connection
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'labsdb';
  try {
   $con = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);
 
   if (!$con) {
 
     throw new Exception('Not Connected ' . mysqli_connect_error());
   }
 } catch (Exception $e) {
   echo $e->getMessage();
 }
 
$id = $_GET['id'];

$sqledit = "select * from users where u_id = $id";


try{
    $result = mysqli_query( $con,$sqledit);

    if (!$result) {
    
      throw new Exception('error occured' . mysqli_error());
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
$row = mysqli_fetch_assoc($result)
 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<form method='post' action ='<?php echo $_SERVER['php_self'] ?>'>
        <div class="modal-header">
          <h4 class="modal-title">Edit User Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name='name' class="form-control" value='<?=$row['name']?>' required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name='email' value='<?=$row['email']?>' required>
        </div>
          <div class="form-group">
            <label>Gender</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender"  value="female"  <?php if ($row['gender']=='female'){echo 'checked';}?> />
                <label class="form-check-label" for="femaleGender">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="male" <?php if ($row['gender']=='male'){echo 'checked';}?> />
                <label class="form-check-label" for="maleGender">Male</label>
            </div>

          </div>

          <div class="form-check d-flex justify-content-center mb-5">
            <input class="form-check-input me-2" type="checkbox" name="rcvmail" <?php if ($row['mail_status']=='Yes'){echo 'checked';}?> />
            <label class="form-check-label" >
            Recieve Emails from us
            </label>
         </div>	
        </div>
        <div class="modal-footer">
          <a href='index.php' class="btn btn-default">Cancel</a>
          <!-- <input type="button" class="btn btn-default"  value="Cancel"> -->
          <input type="submit" class="btn btn-success" value="Add">
        </div>
      </form>
</body>
</html>
<?php
 
 if($_SERVER['REQUEST_METHOD'] == "POST")
 {

  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $rcvmail  = $_POST['rcvmail'];
  $gender   = $_POST['gender'];
  if($rcvmail=='on'){
     $rcvmail ='Yes' ;
  }else
  {
      $rcvmail ='No' ;
  }


  $sqlupdate="update users set name='$name',email='$email',mail_status='$rcvmail',gender='$gender' where u_id=$id";
  try{
    $myquery = mysqli_query( $con,$sqlupdate);
     header("Location: index.php");

    if (!$myquery) {
    
      throw new Exception('error occured' . mysqli_error());
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }


}







?>