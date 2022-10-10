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

$view = "select * from users where u_id = $id";


try{
    $result = mysqli_query( $con,$view);
  
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
    <title>Document</title>
</head>
<body>
    <h3>Name</h3>
    <p><?=$row['name'];?></p>
    <hr>
    <h3>E-mail</h3>
    <p><?=$row['email'];?></p>
    <hr>
    <h3>Gender</h3>
    <p><?=$row['gender'];?></p>
    <hr>
    
    <p><?php if($row['mail_status']=='Yes')
     {echo 'You will recieve Email from us';}
     else {echo 'you will not recieve any Emails from us';}
     ?></p>
    <hr>
</body>
</html>