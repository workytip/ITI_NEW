<?php


// use App\Product;
// include 'vendor/autoload.php';


// $product = new Product;
// var_dump($product);
 function factorail($n)
{
    $mynum=$n;// save 5
    if($n == 0) return 1;
    for($i=1;$i<$mynum;$i++)
    {
        $n*=$mynum-$i; 
        echo $n.'<br>';
        //  i= 1 n=5*4 \ n=20 /i =2 n=20*3 // i=3 n=60 n=60*2 // i=4 n=120 n=120*1
    }
   
    return $n;
}
echo factorail(0);
?>