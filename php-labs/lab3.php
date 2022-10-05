<?php
$name = $_POST['name'];
$email = $_POST['email'];
$group = $_POST['group'];
$details = $_POST['details'];
$gender = $_POST['gender'];
$courses = $_POST['courses']; // array
$agree = $_POST['agree']; // true false

?>

<html>
   <style>
      p{color:red;}
      </style>
   <body>


   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
   <?php if(empty($name)) echo '<p>Name is required</p>'; if(!ctype_alpha($name))echo '<p> Only letters allowed</p>';?>
          Name : <input type="text" name="name" value='<?=$name?>'/>

          
          <br><br>
          <?php if(empty($email)) echo '<p>Email is required</p>'?>
          E-mail : <input type="email" name="email" value='<?=$email?>' /><br><br>

          <?php if(empty($group)) echo '<p>Email is required</p>'?>
          Group : <input type="text" name="group" value='<?=$group?>'/><br><br>

          <?php if(empty($details)) echo '<p>Details field is required</p>'?>
          Class details : <textarea  name="details" rows="4" cols="50"><?=$details?></textarea>
           <br><br>

          <?php if(empty($gender)) echo '<p>gender is required</p>'?>
           <input type="radio"  name="gender" value="Male" <?php if($gender=='Male')echo 'checked';?> > Male
           <input type="radio"   name="gender" value="Female" <?php if($gender=='Female')echo 'checked';?>> Female
           <br><br>

           Select Courses :
           <?php if(empty($courses)) echo '<p>Courses filed is required</p>'?>

            <select name="courses[]"  multiple>
        
               <option value="html" <?php foreach($courses as $value) if($value =='html')echo 'selected'?>>HTML</option>
               <option value="js" <?php foreach($courses as $value) if($value =='js')echo 'selected'?>>JAVASCRIPT</option>
               <option value="php" <?php foreach($courses as $value) if($value =='php')echo 'selected'?>>PHP</option>
               <option value="mysql" <?php foreach($courses as $value) if($value =='mysql')echo 'selected'?>>MYSQL</option>
               <option value="css" <?php foreach($courses as $value) if($value =='css')echo 'selected'?>>CSS</option>
            </select>
            <br><br>

            <?php if(empty($agree)) echo '<p>You must agree on Terms</p>'?>

         <input type="checkbox"  name="agree" <?php if($agree=='on')echo 'checked';?>> Agree
         <br><br>

         <input type="submit"/>
      </form>

   </body>
</html>
<?php

 // Display Data
   echo 'Nama is :'.$name.'<br>';
   echo 'email is :'.$email.'<br>';
   echo 'group is :'.$group.'<br>';

   echo 'courses is :';
   foreach($courses as $value)
   {
      echo $value.'  ';

   }
   echo '<br>';
   echo 'gender is :'.$gender.'<br>';
   echo 'details is :'.$details.'<br>';
   echo 'agree is :'.$agree.'<br>';
?>
