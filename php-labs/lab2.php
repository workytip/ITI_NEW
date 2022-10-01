<?php
echo  nl2br ("first line \n second line");
echo '<br><br>';
// string functions 
$mystring = 'test my string';
echo strtoupper($mystring);
echo '<br><br>';
echo strlen($mystring);
echo '<br><br>';
echo str_word_count($mystring);
echo '<br><br>';

// 3-  Write a PHP script to get the sum and avg of an indexed array
// with value = 45 in index =1
// with value = 12 in index =0
// with value = 25 in index =3
// with value = 10 in index =2
// after that sort it in a reverse order (highest to lowest).

$myarray = array(12,45,10,25);

echo array_sum($myarray);
echo '<br><br>';

$array_avg = array_sum($myarray)/count($myarray);
echo $array_avg;
echo '<br><br>';

rsort($myarray);

$clength = count($myarray);
for($i = 0; $i < $clength; $i++) {
  echo $myarray[$i];
  echo "<br>";
}
echo "<br>";

///////////////////////////////////////
// 4-  Write a PHP script to sort the following associative array :

// array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) in
// a) ascending order sort by value
// b) ascending order sort by Key
// c) descending order sorting by Value
// d) descending order sorting by Key  


$names = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);

// a) ascending order sort by value
asort($names);
foreach($names as $name => $value)
{
   echo $value.'<br>';
}
echo "<br>";
// b) ascending order sort by Key
ksort($names);
foreach($names as $name => $value)
{
   echo $name.'<br>';
}
echo "<br>";

// c) descending order sorting by Value
arsort($names);
foreach($names as $name => $value)
{
   echo $value.'<br>';
}
echo "<br>";

// d) descending order sorting by Key  


krsort($names);
foreach($names as $name => $value)
{
   echo $name.'<br>';
}
echo "<br>";



// 5- Display the following array in an HTML table with Name, Email and Status table headers.
// Specify PHP status with red color.
 $students = [
        ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
        ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
        ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
        ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
        ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
    ];

?>

<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>


<table >
   <tr>
   <th>Name</th>
   <th>email</th>
   <th>status</th>
   </tr>
   <?php 
   for ($i = 0 ; $i<count($students);$i++)
   {  echo '<tr>';
      foreach($students[$i] as $student => $data)
      { if ($data == 'PHP')
         {
            echo '<td style="color:red">'.$data.'</td> ';
         }
         else 
         {
            echo '<td>'.$data.'</td> ';
         }
        
         
      }
      echo '</tr>';
   }  
   ?>

   </table>
</body>
</html>