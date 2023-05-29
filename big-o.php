<?php

// O(n)
function linear($arr){
    foreach($arr as $val){
        echo 1000 * 100000 . "<br>";
    }
}

// O(n^2)
function square($n){
    for($i=0; $i<$n; $i++){
        for($j=0; $j<$n; $j++){
            echo  $i . ", " . $j . "<br>";
        }
    }
}

// O(n^3)
function cube($n){
    for($i=0; $i<$n; $i++){
        for($j=0; $j<$n; $j++){
            for($k=0; $k<$n; $k++){
                echo  $i . ", " . $j . ", " . $k . "<br>";
            }
        }
    }
}

// O(log n)
function log_n($to_the_power_of){
    $n = 1;
    $i = 0;
    while($n < $to_the_power_of){
        $n *= 2;
        echo $n . "<br>";
        $i++;
    }

    echo "log 2 to the power of $i equals $to_the_power_of<br>";
}

// O(log n)
function log_n2($n){
    $i = 0;
    $m = $n;
    while($m > 1){
        echo "$m <br>";
        $m = floor($m/2);
        $i++;
    }
    echo "log 2 to the power of $i equals $n<br>";
}

// O(log n) binary search of ordered array
// use binary search to find the number
function binary_search(Array $arr, $x)
{
   $l = count($arr) - 1;
   $mid = floor($l / 2);
   echo $arr[$mid];
   if($arr[$mid] == $x){
       echo "found";
   }
   if($arr[$mid] < $x){
       $arr = array_splice($arr, $mid);
       var_dump($arr);
       $l = count($arr);
       $mid = floor($l / 2);
   }
   if($arr[$mid] > $x){
       $arr = array_splice($arr, -$mid);
       var_dump($arr);
       $l = count($arr) - 1;
       $mid = floor($l / 2);
   }

}



linear([1,2,3,4,5,"a","b","c"]);
square(2);
cube(2);
log_n(8);
log_n2(8);
binary_search([1,3,12,43,57,89, 100, 123, 157], 100);
