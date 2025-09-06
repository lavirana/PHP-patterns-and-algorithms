<?php
// ============================================
// String Practice Questions in PHP
// ============================================

// 1. Reverse a string without using strrev()
// Example: "hello" → "olleh"
echo "1. Reverse String\n";
$string = 'Hello'; 
$count = strlen($string);
$reversed = "";
for($d=$count; $d>0; $d--){
     $reversed .= $string[$d - 1];
}
echo $reversed . "\n\n";

// --------------------------------------------

// 2. Check if a string is a palindrome
// Example: "madam" → true
echo "2. Palindrome Check\n";
$string = "madam";
$length = strlen($string);
$start = 0;
$end = $length - 1;
$palindrome = 'Yes';
for($v=0; $v<=$length/2; $v++){
    if($start < $end){
        if($string[$start] != $string[$end]){
            $palindrome = 'No';
            break;
        }
    }
    $start++;
    $end--;        
}
echo $palindrome . "\n\n";

// --------------------------------------------

// 3. Count vowels and consonants in a string
// Example: "hello world" → vowels = 3, consonants = 7
echo "3. Vowels & Consonants Count\n";
$string = "hello world";
$final_string = str_replace(" ", "", $string);
$vowels = ['a', 'e', 'i', 'o', 'u'];
$count_v = 0;
$count_c = 0;
for($g=0; $g<strlen($final_string); $g++){
      if(in_array(strtolower($final_string[$g]), $vowels)){
        $count_v++;
      } else {
        $count_c++;
      }
}
echo "Vowels: $count_v, Consonants: $count_c\n\n";

// --------------------------------------------

// 4. Find the first non-repeated character in a string
// Example: "aabbcde" → "c"
echo "4. First Non-Repeated Character\n";
$string = "aabbcde";
$result = '';
for($f=0; $f<strlen($string); $f++){
   $count = 0;
   for($g=0; $g<strlen($string); $g++){
       if($string[$f] == $string[$g]){
           $count++;
       }
   }
   if($count == 1){
       $result = $string[$f];
       break;
   }
}
echo $result . "\n\n";

// --------------------------------------------

// 5. Check if two strings are anagrams
// Example: "listen" and "silent" → true
echo "5. Anagram Check\n";
$first_string = "listen";
$second_string = "silent";

if(strlen($first_string) !== strlen($second_string)){
    $result = 'False';
} else {
    $arr1 = str_split($first_string);
    $arr2 = str_split($second_string);

    sort($arr1);
    sort($arr2);

    $result = ($arr1 === $arr2) ? 'True' : 'False';
}
echo $result . "\n\n";

// --------------------------------------------

// 6. Find the longest word in a sentence
// Example: "I love programming in PHP" → "programming"
echo "6. Longest Word\n";
$sentence = "I love programming programmings in PHP";
$words = explode(" ", $sentence);
$longest = "";
foreach($words as $w){
    if(strlen($w) > strlen($longest)){
        $longest = $w;
    }
}
echo $longest . "\n\n";

// --------------------------------------------

// 7. Count occurrences of each word in a sentence
// Example: "hello world hello" → hello = 2, world = 1
echo "7. Word Frequency\n";
$word = "hello world hello ashish rana ashish lavi rana world ashish";
$explode = explode(" ",$word);
$result = [];
foreach($explode as $val){
    if(isset($result[$val])){
        $result[$val]++;
    } else {
        $result[$val] = 1;
    }
}
print_r($result);
echo "\n";

// --------------------------------------------

// 8. Remove duplicate characters from a string
// Example: "programming" → "progamin"
echo "8. Remove Duplicates\n";
$string = "programming";
$unique = [];
for($g=0; $g < strlen($string); $g++){
    if(!in_array($string[$g],$unique)){
        $unique[] = $string[$g];
    }
}
echo implode("",$unique) . "\n\n";

// --------------------------------------------

// 9. Find the most frequent character in a string
// Example: "teststring" → "t"
echo "9. Most Frequent Character\n";
$f_string = "teststring";
$frequency = [];
for ($i = 0; $i < strlen($f_string); $i++) {
    $char = $f_string[$i];
    $frequency[$char] = ($frequency[$char] ?? 0) + 1;
}
arsort($frequency);
$maxChar = array_key_first($frequency);
echo $maxChar . "\n\n";

// --------------------------------------------

// 10. Check if a string contains only digits
// Example: "12345" → true, "12a45" → false
echo "10. Numeric Check\n";
$string = "12345";
$result = 'True';
for($g=0; $g<strlen($string); $g++){
    if($string[$g] < '0' || $string[$g] > '9'){
        $result = 'False';
        break;
    }
}
echo $result . "\n\n";

// --------------------------------------------

// 11. Capitalize first letter of each word (without ucwords)
// Example: "php is great" → "Php Is Great"
echo "11. Capitalize Words\n";
$string = "php is great";
$words = explode(" ", $string);
$final_word = [];
foreach($words as $values){
     $first = strtoupper($values[0]);
     $rest = substr($values, 1);
     $final_word[] = $first . $rest;
}
echo implode(" ", $final_word) . "\n\n";

?>
