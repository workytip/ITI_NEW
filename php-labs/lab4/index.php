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

  //create table
  $sqltable = 'CREATE TABLE IF NOT EXISTS users ( u_id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  email  VARCHAR(20) NOT NULL,
  mail_status   VARCHAR(20) NOT NULL,
  gender    VARCHAR(20) NOT NULL,
  primary key (u_id))';

try{
  $querytable = mysqli_query( $con,$sqltable);

  if (!$querytable) {
  
    throw new Exception('error occured' . mysqli_error());
  }
} catch (Exception $e) {
  echo $e->getMessage();
}

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

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

    $sqlinsert = "insert into users(name,email,mail_status,gender) values ('$name','$email','$rcvmail','$gender')";
  try{
    $queryinsert = mysqli_query( $con,$sqlinsert);
  
    if (!$queryinsert) {
    
      throw new Exception('error occured' . mysqli_error());
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }


  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lab 4 user Dtatable crud </title>
<link href="indexstyle.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="script.js"></script>
 
<body>
<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2>Model</h2>
        </div>
        <div class="col-sm-6">
          <a href="#addModel" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New </span></a>
          
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
       
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Mail status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
       
        <?php 
        $sqlselect = 'select * from users';
        try{
            $result = mysqli_query( $con,$sqlselect);
          
            if (!$result) {
            
              throw new Exception('error occured' . mysqli_error());
            }
          } catch (Exception $e) {
            echo $e->getMessage();
          }
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {

          
        ?>
         <tr>
          <td><?=$row['u_id']?></td>
          <td><?=$row['name']?></td>
          <td><?=$row['email']?></td>
          <td><?=$row['gender']?></td>
          <td><?=$row['mail_status']?></td>
          <td>
          
            <a href='del.php?id=<?=$row['u_id']?>'  class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
            <a href='edit.php?id=<?=$row['u_id']?>' class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href='show.php?id=<?=$row['u_id']?>' class="Show" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Show details">&#xf070;</i></a>
          </td>
        </tr>
        <?php } }?>   
      </tbody>
    </table>
    
  </div>
</div>
<!-- Add user Modal HTML -->
<div id="addModel" class="modal fade"> 
  <div class="modal-dialog">
    <div class="modal-content">
    <form method='post' action ='<?php echo $_SERVER['php_self'] ?>'>
        <div class="modal-header">
          <h4 class="modal-title">Add New User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name='name' class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name='email' required>
        </div>
          <div class="form-group">
            <label>Gender</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender"  value="female"  />
                <label class="form-check-label" for="femaleGender">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="male" />
                <label class="form-check-label" for="maleGender">Male</label>
            </div>

          </div>

          <div class="form-check d-flex justify-content-center mb-5">
            <input class="form-check-input me-2" type="checkbox" name="rcvmail" id="form2Example3cg" />
            <label class="form-check-label" for="form2Example3g">
            Recieve Emails from us
            </label>
         </div>	
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>