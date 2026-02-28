//Given an array nums of size n, return the majority element.

$nums = [2, 2, 1, 1, 1, 2, 2];
$check = [];
$majority = null;
for($s = 0; $s < count($nums); $s++){
     if(isset($check[$nums[$s]])){
        $check[$nums[$s]] = $check[$nums[$s]] + 1;
     }else{
        $check[$nums[$s]] = 1;
     }

}
foreach($check as $key => $val){
    if($val > count($nums) / 2){
        $majority = $key;
        break;
    }
}
echo "Majority element is: " . $majority;
// ======================================================================================================

//Move all zeros to the end of an array.

$array = [3,5,0,4,0,7,0,2,6,0,5,6,9,0,1,2,6,0];
$count = count($array);
$postion = 0;

for($f=0; $f<$count - 1; $f++){
  if($array[$f] != 0){
      $array[$postion] = $array[$f];
      $postion++;
  }
}
while($postion < $count){
    $array[$postion] = 0;
    $postion++;
}
// ======================================================================================================
//find the intersaction of two arrays.

$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];
$intersection = [];

foreach($array1 as $value){
    if(in_array($value, $array2)){
        $intersection[] = $value;
    }
}

// ======================================================================================================
//Rotate an array to the left by K steps
//Why we use modulo? - To avoid unnecessary full rotations and handle cases when K is greater than array size.

$arr = [1, 2, 3, 4, 5];
$k = 2;

$k = $k % count($arr);
$split_a = array_slice($arr, 0, $k);
$split_b = array_slice($arr, $k);
$final_r = array_merge($split_b, $split_a);

// ======================================================================================================
// check if the number is Armstrong number.

function check_armstrong($number){
   $digits = str_split($number);
   $count = count($digits);
   $res = 0;

   for($f=0; $f<=$count - 1; $f++){
    $sum += pow($digits[$i], $count);
   }
   if($sum == $number){
        return "Armstrong Number";
    } else {
        return "Not Armstrong";
    }
}

$number = 24;
echo check_armstrong($number);
// ======================================================================================================
//remove duplicate elements from an array
$array = [2,4,5,5,7,8,9,2];
$result = [];
for($g=0; $g<count($array) - 1; $g++){
if(!in_array($array[$g],$result)){
    $result[] = $array[$g];
 }
}
echo'<pre>'; print_r($result);
echo'ash';

// ======================================================================================================

// check if two strings are anagrams.

$str1 = "listen";
$str2 = "silent";

$arr1 = str_split($str1);
$arr2 = str_split($str2);

sort($arr1);
sort($arr2);

if ($arr1 == $arr2) {
    echo "Anagram";
} else {
    echo "Not Anagram";
}

// ======================================================================================================


// find missing and duplicate
$array = [1, 5, 2, 2, 4, 5];
sort($array);

for($g=0; $g<count($array) - 1; $g++){
    if($array[$g] + 1 != $array[$g + 1]){
        $missing = $array[$g] + 1;
        echo "Missing number: " . $missing; 
    }
    if($array[$g] == $array[$g + 1]){
        $duplicate = $array[$g];
        echo "Duplicate number: " . $duplicate;
    }
}

// ======================================================================================================

// find the missing number in a range from 1 to N

$array = [1, 2, 4, 5];
$n = 5;

for($g=0; $g<count($array) - 1; $g++){
    if($array[$g] + 1 != $array[$g + 1]){
        $missing = $array[$g] + 1;
        echo "Missing number: " . $missing;
    }
}


// ======================================================================================================

//Ek sorted array hai jisme numbers repeat ho rahe hain. Aapko number 5 ka pehla aur aakhri index dhoondna hai.

//Input:
$arr = [1, 2, 5, 5, 5, 8, 9, 10];
$target = 5;

$first = -1;
$second = -1;

for ($i = 0; $i < count($arr); $i++) {
     if($arr[$i] == $target){
        
        if($first == -1){
            $first = $i;
        }

    $last = $i;
     }
}
echo "First Index: " . $first . "<br>";
echo "Last Index: " . $last;

// ======================================================================================================

// count the frequency of elements in an array.

$array = [1, 2, 2, 3, 1, 1];
$res = [];

for($g = 0; $g < count($array); $g++) {
    $element = $array[$g]; // Current number pakdo

    // Check karo kya ye number pehle se key ban chuka hai?
    if (isset($res[$element])) {
        // Agar hai, toh purani value mein +1 kar do
        $res[$element] = $res[$element] + 1;
    } else {
        // Agar pehli baar mila hai, toh value 1 set karo
        $res[$element] = 1;
    }
}

print_r($res);
/* Output:
Array (
    [1] => 3
    [2] => 2
    [3] => 1
) */

// merge two sorted arrays into one

$array1 = [1,9,2,3,4];
$array2 = [7,8,6,8];

$merged_array = array_merge($array1, $array2);

for($a=0; $a<count($merged_array); $a++){
    for($g=0; $g<count($merged_array) - 1; $g++){
         if($merged_array[$g] > $merged_array[$g + 1]){
             $swap = $merged_array[$g + 1];
             $merged_array[$g + 1] = $merged_array[$g];
             $merged_array[$g] = $swap;
         }
    }
}
echo'<pre>';  print_r($merged_array);

//


// ======================================================================================================

//calculate the factorial of a number?
$n = 5;
$start_n = 1; // intialize the variable to store the result. start with 1 

// use a for loop to iterate through the numbers you want to multiply
for($f=1; $f<=$n; $f++){
    // multiply the current total by the loop counter's value and update the total 
    $start_n *= $f; // same as $total = $total * $f;
}
print_r($start_n);
echo'<br>';

// ======================================================================================================


// Find the sum of digits of a number.

$arrayS = [4,5];
$co = count($arrayS);
$sum = 0;
for($f=0; $f <=$co ; $f++){
     $sum += $arrayS[$f];
}
print_r($sum);

echo'<br>';

// ======================================================================================================


// 1. Find the maximum element in an array.
 $array = [2,7,9,5,9,44,7,23,55,765,123,445];

 $max = $array[0];

 foreach($array as $val){
     if($val > $max){
         $max = $val;
     }
 }
print_r($max);
echo'<br>';
// ======================================================================================================

// 2. Count the number of even and odd numbers in a list.
$array = [2,7,9,5,9,44,7,23,55,765,123,445];

$even = [];
$odd = [];
$even_count = 0;
$odd_count = 0;
foreach($array as $val){
    if($val % 2 == 0){
        $even[] = $val;
        $even_count++;
    }else{
        $odd[] = $val;
        $odd_count++;
    }
}
print_r($even);
echo'<br>';
print_r($odd);
echo'Total Even numbers are '. $even_count.'<br>'.' And Total Odd Numbers are'. $odd_count;

echo'<br>';
// ======================================================================================================

// Reverse a given string 
$string = "AshishRana";
$split_str = str_split($string);

$total = count($split_str);

for($d=$total - 1; $d >= 0; $d--){
     $result.=$string[$d];
}
print_r($result);
echo'<br>';

// ======================================================================================================
//print the Fibonacci sequence up to N terms.
//The Fibonacci sequence is a series of numbers where each number is the sum of the two preceding (previous) ones.

$n = 6;

$a = 0;
$b = 1;

$res = [];

for($i = 0; $i < $n; $i++) { // < $n means exactly 6 times
    $res[] = $a;      // Save the current number
    $val = $a + $b;      // Calculate next
    $a = $b;             // Move b to a
    $b = $val;           // Move sum to b
}
print_r($res);
echo'<br>';
// ======================================================================================================

// find the second largest element in an array.

$array = [4, 5, 6, 7, 88, 8];
$n = count($array);


for($f=0; $f < count($array); $f++){
    for($d=0; $d < count($array); $d++){
         if($array[$d] < $array[$d + 1]){
             $swap = $array[$d];
             $array[$d] = $array[$d + 1];
             $array[$d + 1] = $swap;
         }
    }
}
  echo 'secong laraget number is '. $array[2];


// ======================================================================================================


// Nested loop to fully sort the array
for ($i = 0; $i < $n; $i++) {
    for ($g = 0; $g < $n - 1; $g++) { // n-1 prevents "out of bounds"
        if ($array[$g] < $array[$g + 1]) { // Descending order
            $swap = $array[$g];
            $array[$g] = $array[$g + 1];
            $array[$g + 1] = $swap;
        }
    }
}

echo "Second Largest is: " . $array[1];
echo'<br>';
echo'<br>';
// ======================================================================================================


// check if the string is palindrome.

function CheckPlaindrom($string){
    $start = 0;
    $end = strlen($string) - 1;
    while($start <= $end){
        if($string[$start] !== $string[$end]){
            return "No";
        }
        $start++;
        $end--;
    }
    return "Yes";
}

$string = "madaX";
echo CheckPlaindrom($string);
echo'<br>';


// ======================================================================================================


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

//First we initialize queue - It is an array which stored states.
//starting points - string is empty, and open is 0, close is also 0
$queue[] = ['str' => '', 'open' => 0, 'close' => 0];

    for ($i = 0; $i < count($queue); $i++) {

        //current states value//
        $current = $queue[$i];

        $str = $current['str']; // current string
        $open = $current['open']; // current string
        $close = $current['close']; // close brackets count
        
    // Base conditions
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

 ############################################################################################################################

//Merge two sorted linked lists and return it as a new sorted list. The new list should be made by splicing together the nodes of the first two lists.

//Input: list1 = [1,2,4], list2 = [1,3,4]
//Output: [1,1,2,3,4,4]


$list1 = [1, 2, 4];
$list2 = [1, 3, 4];

$i = 0;
$j = 0;
$result = [];

while ($i < count($list1) && $j < count($list2)) {
    if ($list1[$i] <= $list2[$j]) {
        $result[] = $list1[$i];
        $i++;
    } else {
        $result[] = $list2[$j];
        $j++;
    }
}

while ($i < count($list1)) {
    $result[] = $list1[$i];
    $i++;
}

while ($j < count($list2)) {
    $result[] = $list2[$j];
    $j++;
}

print_r($result);
