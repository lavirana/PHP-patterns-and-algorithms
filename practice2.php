<?php
#######################################################################################################################

//binary search 

function binarys($ar, $target){
$c_s = count($ar);
$start = 0; 
$end = $c_s - 1;   

while($start <= $end){
    $mid = intval(($start + $end) / 2);
    if($target > $ar[$mid]){
            $start = $mid + 1;
    }elseif($target < $ar[$mid]){
            $end = $mid - 1; 
    }else{
           return $mid;
    }
}
return -1;
}
$ar = array(-1, 0, 3, 4, 5, 9, 12);
$target = 12;

$rs = binarys($ar, $target);
print_r($rs);


#########################################################################################################################

//find smallest value in array //
$lr_array = array(3,-4,-35,244,7,50,-8);
$size_lr = count($lr_array);
$max = $lr_array[0];
for($d=0; $d<$size_lr; $d++){
    if($lr_array[$d] > $max){
        $max = $lr_array[$d];
    }
}
print_r($max);


#########################################################################################################################


//find smallest value in array //
$sm_array = array(3,-4,-35,2,7,50,-8);
$size_sm = count($sm_array);
$min = $sm_array[0];
for($d=0; $d<$size_sm; $d++){
    if($sm_array[$d] < $min){
        $min = $sm_array[$d];
    }
}
print_r($min);

#########################################################################################################################

//array reverse //

$r_array = array(3,4,5,2,7,5,8);
$size_a = count($r_array);
$start = 0;
$end = $size_a - 1;
function swap(&$a , &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}
while($start < $end){
    swap($r_array[$start], $r_array[$end]);
    $start++;
    $end--;
}
print_r($r_array);

#########################################################################################################################
//linear search

 $search_ar = array(4,2,7,8,1,2,6);
 $target_val = 8;

 for($f=0; $f< count($search_ar); $f++){
    if($search_ar[$f] == $target_val){
         print_r($f); exit();
    }
 }


#########################################################################################################################
//Sort the array in ascending/descending order

$sort_array = array('355','45','6');
$size = count($sort_array);
    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = 0; $j < $size - $i - 1; $j++) {
        if ($sort_array[$j] > $sort_array[$j + 1]) {
            $temp = $sort_array[$j];
            $sort_array[$j] = $sort_array[$j + 1];
            $sort_array[$j + 1] = $temp;
        }
    }
}
print_r($sort_array);

#########################################################################################################################

 # product of array except self
 $ar = array(1,2,3,4);
    $size = count($ar);
 
    for ($i = 0; $i < $size; $i++) {
        $pp = 1;
        for ($j = 0; $j < $size; $j++) {
          if($i != $j){
            $pp *= $ar[$j];
          }
        }
        $resl[$i] = $pp;
    }
    
    print_r($resl);
#########################################################################################################################

//Check if the array is already sorted
$ar = array(1,2,3,4,5,6);
$isSorted = true;
for($f=0; $f<count($ar) - 1; $f++){
     if($ar[$f] > $ar[$f + 1]){
        $isSorted = false;
        break;
     }
}
if ($isSorted) {
    echo "Array is sorted in ascending order.";
} else {
    echo "Array is not sorted.";
}
#########################################################################################################################

//Find Kth largest/smallest element
$ar = array(20, 5, 8, 12, 3, 10);
$k = 3;
$size = count($ar);

for ($i = 0; $i < $size - 1; $i++){
    for ($j = 0; $j < $size - $i - 1; $j++){
        if ($ar[$j] > $ar[$j + 1]){
            $temp = $ar[$j]; $ar[$j] = $ar[$j + 1]; $ar[$j + 1] = $temp;
        }
    }
}
echo "Kth Smallest: " . $ar[$k - 1];
#########################################################################################################################

$sort_array = array('355','45','6');
$size = count($sort_array);
    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = 0; $j < $size - $i - 1; $j++) {
        if ($sort_array[$j] > $sort_array[$j + 1]) {
            $temp = $sort_array[$j];
            $sort_array[$j] = $sort_array[$j + 1];
            $sort_array[$j + 1] = $temp;
        }
    }
}
#########################################################################################################################
//Implement binary search

$ar = [3,5,1,7,8,9,0];
$siz = count($ar);
$trgt = 5;

for($g=0; $g< $siz-1; $g++){
     for($s=0; $s < $siz - $g - 1; $s++){ 
        if($ar[$s] > $ar[$s + 1]){
            $temp = $ar[$s];
            $ar[$s] = $ar[$s + 1];
            $ar[$s + 1] = $temp;
        }
     }
}
function bnr_search($ar, $target){

        $size = count($ar);
        $start = 0;
        $end = $size - 1;

        while($start <= $end){   
            $mid = intval(($start + $end) / 2); 
                if($target > $ar[$mid]){
                    $start = $mid + 1;
                }elseif($target < $ar[$mid]){
                    $end = $mid - 1;
                }else{
                    return  $mid;
                }
            }
        return -1;
}
$rs = bnr_search($ar, $trgt);
print_r($rs);

#########################################################################################################################

//Count number of occurrences of an element

$arr = array(4, 6, 4, 3, 6, 4);
$size = count($arr);
$visited = array(); 
for ($i = 0; $i < $size; $i++) {
 
 if (isset($visited[$i]) && $visited[$i] == 1) {
    continue;
}
$count = 1;
for ($j = $i + 1; $j < $size; $j++) {
    if ($arr[$i] == $arr[$j]) {
        $count++;
        $visited[$j] = 1; 
    }
}

$visited[$i] = 1;
echo'<br>';
echo $arr[$i] . " occurs " . $count . " times\n";
}
#########################################################################################################################


### Two Pointers & Pair Problems ###

//Find if a pair exists with a given sum

$array_p = array(4,6,7,2,9,56);
$target_p = 13;
$size_p = count($array_p);
for($d=0; $d < $size_p - 1; $d++){
    for ($j = 0; $j < $size_p - $d - 1; $j++) {
    if($array_p[$j] > $array_p[$j + 1]){
        $temp = $array_p[$j];
        $array_p[$j] = $array_p[$j + 1];
        $array_p[$j + 1] = $temp;
        }
    }
}
$left = 0;
$right = $size_p  - 1;
while($left < $right){
    $current_sum = $array_p[$left] + $array_p[$right];
    if($current_sum == $target_p){
        echo "Pair found: (" . $array_p[$left] . ", " . $array_p[$right] . ")";
        break;
    } elseif($current_sum < $target_p){
        $left++;
    } else {
        $right--;
    }
}

#########################################################################################################################

//Count all pairs with a given difference
$arr = array(5,7,2,4,3);
$target_s = 2;
$size_s = count($arr);

for($f=0; $f < $size_s; $f++){
    for($a=0; $a< $size_s - $f - 1; $a++){
        if($arr[$a] > $arr[$a + 1]){
            $temp = $arr[$a];
            $arr[$a] = $arr[$a + 1];
            $arr[$a + 1] = $temp;
        }
    }
}
$count = 0;
for($g=0; $g < $size_s; $g++){
    for($s = $g + 1; $s < $size_s; $s++){
        if(abs($arr[$g] - $arr[$s]) == $target_s){
            //echo "Pair found: (" . $arr[$g] . ", " . $arr[$s] . ")";
            $count++;
        }
    }
}

print_r($count);

#########################################################################################################################

//Move all zeros to end
$ar_m = array(1, 0, 3, 0, 5);
$size_m = count($ar_m);
$j = 0;  
for ($i = 0; $i < $size_m; $i++) {
        if($ar_m[$i] != 0){
            $temp = $ar_m[$i];
            $ar_m[$i] = $ar_m[$j];
            $ar_m[$j] = $temp;
            $j++; 
        }
}
//print_r($ar_m);
#########################################################################################################################

//Find all unique pairs with sum = K


$arr = [1, 5, 7, -1];
$k = 6;
$size_u = count($arr);
// first solve with two pointer method //
for($df=0; $df<$size_u - 1; $df++){
    for($dg=0; $dg < $size_u - $df - 1; $dg++){
        if($arr[$dg] > $arr[$dg + 1]){
            $temp = $arr[$dg];
            $arr[$dg] = $arr[$dg + 1];
            $arr[$dg + 1] = $temp;
        }
    }
}
$startt = 0;
$endd = $size_u - 1;

while($startt < $endd){
$current_sum = $arr[$startt] + $arr[$endd];
if($current_sum == $k){
    echo "" . "Pair found: (" . $arr[$startt] . ", " . $arr[$endd] . ")";
         $startt++;
         $endd--;
   
        }elseif($current_sum < $k){
            $startt++;
        }else{
            $endd--;
        }
}
#########################################################################################################################

Question: Find Divisible Pairs in an Array
Problem Statement

You are given an array of integers and a number k.
Your task is to count how many pairs of numbers in the array have a sum that is divisible by k.

A pair (i, j) is valid if:

i < j

(arr[i] + arr[j]) is divisible by k

Example Input
arr = [5, 9, 10, 7, 4]
k = 2

Output : 4

Explanation:
The valid pairs are:

(5, 9) → 14 % 2 == 0  
(5, 7) → 12 % 2 == 0  
(9, 7) → 16 % 2 == 0  
(10, 4) → 14 % 2 == 0  


Solution:

<?php
$ar = [5, 9, 10, 7, 4];
$k = 2;
$count = 0;

for ($i = 0; $i < count($ar); $i++) {
    for ($j = $i + 1; $j < count($ar); $j++) {
        if (($ar[$i] + $ar[$j]) % $k == 0) {
            $count++;
        }
    }
}

echo "Number of divisible pairs: $count";
#########################################################################################################################


//Given n pairs of parentheses, write a function to generate all combinations of well-formed parentheses.

$n = 3;
$queue = [];
$result = [];

/*
 queue item structure:
 [
   'str' => current string,
   'open' => open brackets count,
   'close' => close brackets count
 ]
*/

$queue[] = ['str' => '', 'open' => 0, 'close' => 0];
    for ($i = 0; $i < count($queue); $i++) {

        $current = $queue[$i];

        $str = $current['str'];
        $open = $current['open'];
        $close = $current['close'];
    
            if ($open == $n && $close == $n) {
                $result[] = $str;
                continue;
            }

            if ($open < $n) {
                $queue[] = [
                    'str' => $str . '(',
                    'open' => $open + 1,
                    'close' => $close
                ];
            }
            if ($close < $open) {
                $queue[] = [
                    'str' => $str . ')',
                    'open' => $open,
                    'close' => $close + 1
                ];
            }

    }
    print_r($result);
#########################################################################################################################


?>
