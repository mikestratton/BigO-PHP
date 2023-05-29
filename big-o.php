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
$arr = [1,2,3,4,5,6,7,8];
$start = 0;
$end = count($arr) - 1;
$target = 8;
function binary_search($arr, $start, $end, $target){
    if($start > $end){
        echo "not found<br>";
        return false;
    }
    $mid = floor(($start + $end) / 2);

    if($arr[$mid] === $target){
        echo "found <br>";
        return true;
    }

    if($arr[$mid] > $target){
        return binary_search($arr, $start, $mid -1, $target);
    }

    if($arr[$mid] < $target){
        return binary_search($arr, $mid + 1, $end, $target);
    }

}

// O(n log n)
function n_log_n($n){
    $y = $n;
    while($n > 1){
        $n = floor($n / 2);
        for($i = 1; $i <= $y; $i++){
            echo "$i<br>";
        }
    }
}

// merge sort O(n log n)
function merge_sort($arr){
    if(count($arr) < 2){
        var_dump($arr);
        return $arr;
    }
    $mid = floor(count($arr) / 2);
    $left_arr = array_splice($arr,0, $mid);
    $right_arr = array_splice($arr, $mid);
}

linear([1,2,3,4,5,"a","b","c"]);
square(2);
cube(2);
log_n(8);
log_n2(8);
binary_search($arr, $start, $end, $target);
n_log_n(4);
