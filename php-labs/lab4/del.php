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

$sqldel = "delete from users where u_id = $id";


try{
    $result = mysqli_query( $con,$sqldel);
  
    if (!$result) {
    
      throw new Exception('error occured' . mysqli_error());
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }

header("Location: index.php");

?>