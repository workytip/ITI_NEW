<?php



namespace App;

class Factorial 
{
    public function factRand($x)
    {
        return factorail($x-1)*$x;
    }

    public function factorail($n)
    {
        $number=$n;
        if($n == 0){
            return 1;
        }
        else if($n == 'false')
        {
            return null;
        }
        else if($n > 3)
        {
            // $n=factorail($n-1)*$n;  
            // return $n;
            // return factRand($n);
        }
        else if($n < 0)
        {
            return null;
        }
        else if(is_float($n))
        {
            return null;
        }
        else if(is_string($n))
        {
            return null;
        }
        else
        {
            for($i=1;$i<$number;$i++)
             {
                $n*=$number-$i; 
             }
            return $n;
        } 
        
    }

   
}

?>