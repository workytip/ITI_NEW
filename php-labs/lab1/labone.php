<?php
//  echo phpinfo();
 define("SITE-NAME", 'lab1');

//  echo constant("SITE-NAME").'<BR>';

 ECHO('Server Name :'.$_SERVER['SERVER_NAME'].'<BR>');
 ECHO('Address :'.$_SERVER['SERVER_ADDR'].'<BR>');
 ECHO('Port :'.$_SERVER['SERVER_PORT'].'<BR>');
 ECHO('Filename  :'.__FILE__.'<BR>');
 ECHO('PATH  :'.$_SERVER['SCRIPT_NAME'].'<BR>');


////////////////////////////////////////////
//******************************/  
//for loop
$a = 0;
$b = 0;

for( $i = 0; $i<5; $i++ ) {
   $a += 10;
   $b += 5;
}
echo 'for loop output a ='.$a.'and b ='.$b.'<br>';
//At the end of the loop a = ?? and b = ??
// a=50 , b=25
  
//******************************/
//while loop
$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}
echo 'while loop output num ='.$num.'and i ='.$i.'<br>';

//Loop stopped at i = ?? and num = ??
// i =10 , num =40

//******************************/
//do...while
$i2 = 0;
$num2 = 0;
         
         do {
            $i2++;
         } 
         while( $i2 < 10 );
echo 'do while loop output num ='.$num2.'and i ='.$i2.'<br>';

//Loop stopped at i = ?? // i=10
//******************************/
//foreach
$arr = array( 1, 2, 3, 4, 5);
         
foreach( $arr as $value ) {
   echo "Value is $value <br />";
}
/* Output
Value is 1
Value is 2
Value is 3
Value is 4
Value is 5  */
//******************************/
//break
$i = 0;
         
         while( $i < 10) {
            $i++;
            if( $i == 3 )break;
         }
 echo 'break output i ='.$i.'<br>';

//Loop stopped at i = ?? //i=3

//******************************/
//continue
$array = array( 1, 2, 3, 4, 5);
   echo  $array[2]; 

foreach( $array as $value ) {
   if( $value == 3 )continue;
   echo "Value is $value <br />";
}
// Output ?? 1,2,4,5
//******************************/

$age =10;

switch ($age) {
  case $age < 5:
    echo "Stay at home!";
    break;
  case $age == 5:
    echo "Go to Kindergarden!";
    break;
  case $age > 6 && $age <12:
    echo "Go to grade ".$age-6                                                                                                                                                                                      ;
    break;
    default:
    echo 'not listed';
}
 



?>