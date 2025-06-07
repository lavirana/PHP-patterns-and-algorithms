<?php

class Practice {

      /**
     * Generates a series where each new element is the sum of the previous four numbers.
     *
     * @param int $n Number of additional elements to generate
     * @return array Generated series
     */
    public function generateSumSeries(int $n): array {
        $numbers = [1, 2, 3, 4];
        for ($i = 0; $i < $n; $i++) {
            $sum = 0;
            $lastFour = array_slice($numbers, -4);
            foreach ($lastFour as $val) {
                $sum += $val;
            }
            $numbers[] = $sum;
        }
        return $numbers;
    }

      /**
     * Generates a series where each new element is the sum of the previous four numbers.
     *
     * @param int $n Number of additional elements to generate
     * @return array Generated series
     */
    public function generateSumSeries2(int $n): array {
        $numbers = [1, 2, 3, 4];
        for ($i = 0; $i < $n; $i++) {
            $sum = array_sum(array_slice($numbers, -4));
            $numbers[] = $sum;
        }
        return $numbers;
    }

      /**
     * Generates a number pyramid pattern.
     *
     * @param int $rows Number of rows in the pyramid
     * @return string Generated HTML pyramid
     */
    public function generateNumberPyramid(int $rows = 5): string {
        $output = '';
        for ($i = 0; $i < $rows; $i++) {
            for ($s = 0; $s < $rows - $i - 1; $s++) {
                $output .= "&nbsp;&nbsp;";
            }
            for ($j = 0; $j <= $i; $j++) {
                $output .= $j;
            }
            for ($j = $i - 1; $j >= 0; $j--) {
                $output .= $j;
            }
            $output .= "<br>";
        }
        return $output;
    }
  
    /**
     * Generates a Fibonacci series.
     *
     * @param int $limit Number of terms to generate
     * @return array Fibonacci series
     */
    public function getFibonacciSeries(int $limit = 15): array {
        $series = [];
        $n1 = 0; $n2 = 1;
        for ($i = 0; $i < $limit; $i++) {
            $series[] = $n1;
            $next = $n1 + $n2;
            $n1 = $n2;
            $n2 = $next;
        }
        return $series;
    }

    /**
     * Returns an array where each element is the product of all the elements of the array except itself.
     *
     * @param array $nums Input array
     * @return array Array of products
     */
    public function getProductExceptSelf(array $nums = [1, 2, 3, 4]): array {
        $n = count($nums);
        $prefix = array_fill(0, $n, 1);
        $suffix = array_fill(0, $n, 1);
        $result = array_fill(0, $n, 1);

        for ($i = 1; $i < $n; $i++) {
            $prefix[$i] = $prefix[$i - 1] * $nums[$i - 1];
        }

        for ($i = $n - 2; $i >= 0; $i--) {
            $suffix[$i] = $suffix[$i + 1] * $nums[$i + 1];
        }

        for ($i = 0; $i < $n; $i++) {
            $result[$i] = $prefix[$i] * $suffix[$i];
        }

        return $result;
    }

  public function squarePatternFiveStars(): string {
        $output = '';
        for ($c = 0; $c <= 5; $c++) {
            for ($d = 1; $d <= 5; $d++) {
                $output .= '*';
            }
            $output .= "<br>";
        }
        return $output;
    }

    public function oneFour(): string {
        $output = '';
        for ($s = 1; $s <= 4; $s++) {
            for ($f = 1; $f <= 4; $f++) {
                $output .= $f;
            }
            $output .= "<br>";
        }
        return $output;
    }

    public function squarePatternContinue(): string {
        $output = '';
        $sum = 1;
        for ($s = 1; $s <= 3; $s++) {
            for ($f = 1; $f <= 3; $f++) {
                $output .= $sum;
                $sum++;
            }
            $output .= "<br>";
        }
        return $output;
    }

    public function squareAbcPatternContinue(): string {
        $output = '';
        $ch = 'A';
        for ($s = 1; $s <= 3; $s++) {
            for ($f = 1; $f <= 3; $f++) {
                $output .= $ch;
                $ch++;
            }
            $output .= "<br>";
        }
        return $output;
    }

    public function trianglePattern(): string {
        $output = '';
        for ($c = 0; $c <= 4; $c++) {
            for ($j = 0; $j <= $c; $j++) {
                $output .= '*';
            }
            $output .= "<br>";
        }
        return $output;
    }

    public function trianglePatternSameNumber(): string {
        $output = '';
        for ($c = 0; $c <= 4; $c++) {
            for ($j = 0; $j <= $c; $j++) {
                $output .= ($c + 1);
            }
            $output .= "<br>";
        }
        return $output;
    }

    public function trianglePatternSameColNumbers(): string {
        $output = '';
        for ($c = 0; $c <= 5; $c++) {
            for ($j = 1; $j <= $c; $j++) {
                $output .= $j;
            }
            $output .= "<br>";
        }
        return $output;
    }

    public function reverseTrianglePattern(): string {
        $output = '';
        for ($c = 0; $c <= 5; $c++) {
            for ($j = $c + 1; $j > 0; $j--) {
                $output .= $j;
            }
            $output .= "<br>";
        }
        return $output;
    }

    public function floydTrianglePattern(): string {
        $output = '';
        $num = 1;
        for ($v = 0; $v <= 4; $v++) {
            for ($c = 1; $c <= $v + 1; $c++) {
                $output .= $num . " ";
                $num++;
            }
            $output .= "<br>";
        }
        return $output;
    }

    public function invertedTrianglePattern(): string {
        $output = '';
        for ($v = 0; $v < 5; $v++) {
            for ($j = 0; $j < $v; $j++) {
                $output .= "&nbsp&nbsp";
            }
            for ($j = 0; $j < 5 - $v; $j++) {
                $output .= (5 + $v);
            }
            $output .= "<br>";
        }
        return $output;
    }



// Prints an inverted triangle pattern of consecutive characters starting from 'A'
function invertedTriangleCharacterPattern(int $rows = 6): void {
    $char = 'A';
    for ($i = 1; $i <= $rows; $i++) {
        // Print leading spaces
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // Print characters
        for ($j = $i; $j <= $rows; $j++) {
            echo $char++;
        }
        echo '<br>';
    }
}

// Prints a pyramid pattern with numbers
function pyramidPattern(int $rows = 4): void {
    for ($i = 0; $i < $rows; $i++) {
        // Print leading spaces
        for ($s = 0; $s < $rows - $i - 1; $s++) {
            echo "&nbsp;&nbsp;";
        }
        // Print ascending numbers
        for ($s = 0; $s <= $i; $s++) {
            echo $s;
        }
        // Print descending numbers except the last
        for ($s = $i - 1; $s >= 0; $s--) {
            echo $s;
        }
        echo '<br>';
    }
}

// Prints a hollow diamond pattern made of asterisks
function hollowDiamondPattern(int $rows = 4): void {
    // Upper part of diamond
    for ($i = 0; $i < $rows; $i++) {
        // Leading spaces
        for ($s = 0; $s < $rows - $i - 1; $s++) {
            echo "&nbsp;&nbsp;";
        }
        echo "*";
        if ($i != 0) {
            for ($s = 0; $s < 2 * $i - 1; $s++) {
                echo "&nbsp;&nbsp;";
            }
            echo "*";
        }
        echo '<br>';
    }
    // Lower part of diamond
    for ($i = 0; $i < $rows - 1; $i++) {
        // Leading spaces
        for ($s = 0; $s <= $i; $s++) {
            echo "&nbsp;&nbsp;";
        }
        echo "*";
        if ($i != $rows - 2) {
            for ($j = 0; $j < 2 * ($rows - $i) - 5; $j++) {
                echo "&nbsp;&nbsp;";
            }
            echo "*";
        }
        echo '<br>';
    }
}

// Returns the smallest and largest values from an array
function getSmallestAndLargestValue(array $nums): array {
    if (empty($nums)) {
        return ['smallest' => null, 'largest' => null];
    }

    $smallest = $nums[0];
    $largest = $nums[0];

    foreach ($nums as $num) {
        if ($num < $smallest) {
            $smallest = $num;
        }
        if ($num > $largest) {
            $largest = $num;
        }
    }

    return ['smallest' => $smallest, 'largest' => $largest];
}

// Performs a linear search for target in array, returns index or -1 if not found
function linearSearch(array $array, $target): int {
    foreach ($array as $index => $value) {
        if ($value === $target) {
            return $index;
        }
    }
    return -1;
}

// Swap two values by reference
function swap(&$a, &$b): void {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Reverses an array and returns the reversed array
function reverseArray(array $array): array {
    $start = 0;
    $end = count($array) - 1;

    while ($start < $end) {
        $this->swap($array[$start], $array[$end]);
        $start++;
        $end--;
    }

    return $array;
}

// Returns unique values from an array (values that appear only once)
function getUniqueValues(array $array): array {
    $unique = [];

    foreach ($array as $i => $value) {
        $count = 0;
        foreach ($array as $j => $val) {
            if ($value === $val) {
                $count++;
            }
        }
        if ($count === 1) {
            $unique[] = $value;
        }
    }

    return $unique;
}

// Swaps the minimum and maximum values in an array and returns the modified array
function swapMinMax(array $array): array {
    if (empty($array)) {
        return $array;
    }

    $minIndex = 0;
    $maxIndex = 0;

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $array[$minIndex]) {
            $minIndex = $i;
        }
        if ($array[$i] > $array[$maxIndex]) {
            $maxIndex = $i;
        }
    }

    $this->swap($array[$minIndex], $array[$maxIndex]);

    return $array;
}

// Placeholder for maximum subarray sum (Kadane's algorithm would be better)
function maximumSubarraySum(array $array): int {
    $maxSum = PHP_INT_MIN;
    $currentSum = 0;

    foreach ($array as $value) {
        $currentSum += $value;
        if ($currentSum > $maxSum) {
            $maxSum = $currentSum;
        }
        if ($currentSum < 0) {
            $currentSum = 0;
        }
    }

    return $maxSum;
}

// Returns total number of characters across an array of strings
function totalChars(array $strings): int {
    $total = 0;
    foreach ($strings as $str) {
        $total += strlen($str);
    }
    return $total;
}

// Returns the intersection of two arrays
function arrayIntersection(array $a, array $b): array {
    return array_values(array_intersect($a, $b));
}



/**
 * Finds the maximum water container area using two pointers.
 *
 * @param array $height Heights of the lines.
 * @return int Maximum area of water container.
 */
function maxArea(array $height): int {
    $maxWater = 0;
    $left = 0;
    $right = count($height) - 1;

    while ($left < $right) {
        $width = $right - $left;
        $ht = min($height[$left], $height[$right]);
        $currentWater = $width * $ht;
        $maxWater = max($maxWater, $currentWater);

        if ($height[$left] < $height[$right]) {
            $left++;
        } else {
            $right--;
        }
    }

    return $maxWater;
}

/**
 * Finds the maximum water container area using brute force (inefficient).
 *
 * @param array|null $numbers Optional array of heights. Defaults to example data.
 * @return int Maximum area of water container.
 */
function maxAreaBruteForce(array $numbers = null): int {
    if ($numbers === null) {
        $numbers = [2, 4, 5, 3, 4, 5, 6, 7];
    }

    $maxWater = 0;
    $count = count($numbers);

    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            $width = $j - $i;
            $height = min($numbers[$i], $numbers[$j]);
            $currentWater = $width * $height;
            $maxWater = max($maxWater, $currentWater);
        }
    }

    return $maxWater;
}

/**
 * Product of array except self - naive O(n^2) approach.
 *
 * @param array|null $nums Optional input array. Defaults to [1,2,3,4].
 * @return array Result array where each element is product of all other elements.
 */
function exceptSelfNaive(array $nums = null): array {
    if ($nums === null) {
        $nums = [1, 2, 3, 4];
    }
    $answer = [];
    $n = count($nums);

    for ($i = 0; $i < $n; $i++) {
        $answer[$i] = 1;
        for ($j = 0; $j < $n; $j++) {
            if ($i !== $j) {
                $answer[$i] *= $nums[$j];
            }
        }
    }

    return $answer;
}

/**
 * Product of array except self - efficient O(n) approach without division.
 *
 * @param array $nums Input array.
 * @return array Result array where each element is product of all other elements.
 */
function productExceptSelf(array $nums): array {
    $n = count($nums);
    $prefix = array_fill(0, $n, 1);
    $suffix = array_fill(0, $n, 1);
    $ans = array_fill(0, $n, 1);

    // Build prefix products
    for ($i = 1; $i < $n; $i++) {
        $prefix[$i] = $prefix[$i - 1] * $nums[$i - 1];
    }

    // Build suffix products
    for ($i = $n - 2; $i >= 0; $i--) {
        $suffix[$i] = $suffix[$i + 1] * $nums[$i + 1];
    }

    // Construct result by multiplying prefix and suffix products
    for ($i = 0; $i < $n; $i++) {
        $ans[$i] = $prefix[$i] * $suffix[$i];
    }

    return $ans;
}

      	function twoSum() {
							$nums = [2,15,11,7];
							$target = 9;
							for($i=0; $i<count($nums); $i++){
								 for($j=$i + 1; $j<=count($nums); $j++){
									  $get_sum = $nums[$i] + $nums[$j];
									  if($get_sum == $target){
										$result = [$i, $j];
										break 2;
									  }
								 }
							}
							
    if (!empty($result)) {
       return $result;
    } else {
        return false;
    }
						}

		function binarySearch(){
						$array = [-1, 0, 3, 4, 5, 9, 12];
						$target = 5;
						$start = 0;
						$end = count($array) - 1;
						while($start <= $end){
							$mid = $start + ($end - $start) / 2;
							if($target > $array[$mid]){
								$start = $mid + 1;
							} elseif($target < $array[$mid]){
								$end = $mid - 1;
							}else{
								return $mid;
							}
						}
						return -1;
					}

		function isPalindrome($str) {
			$cleanStr = strtolower(str_replace(' ', '', $str));
				// Reverse the string
    				$reversed = strrev($cleanStr);
				// Check if original == reversed
    			return $cleanStr === $reversed;
		 }

	/**
	* $array = [0,2,3,2,5,6,12];
    	* $target = 12;
	*/
		function binarySearch2($array, $target){
		    $start = 0;
		    $end = count($array) - 1;
		
		    while($start <= $end){
		        $mid = ($start + $end) / 2;
		
		        if($target > $array[$mid]){
		            $start = $mid + 1;
		        }else if($target < $array[$mid]){
		            $end = $mid - 1;
		        }else{
		            return $mid;
		        }
		    }
		return -1;
		}


	function searchInRotatatedSortedArray(){
	    $array = [4,5,6,7,0,1,2];
	    $target = 0;
	    $start = 0;
	    $end =   count($array)-1;
	    while($start <= $end){
	        $mid = $start + ($end - $start) / 2;
	        if($array[$mid] == $target){
	            return $mid;
	        }
	        if($array[$start] <= $array[$mid]){ // left sorted
	                if($array[$start] <= $target && $target <= $array[$mid]){
	                    $end = $mid - 1;
	                }else{
	                    $start = $mid + 1;
	                }
	        }else{
	             if($array[$mid] <= $target &&  $target <= $array[$end]){
	                $start = $mid + 1;
	             }else{
	                $end = $mid - 1;
	             }
	        }
	    }
	    return -1;    
	}

		function peakIndexInMountainArray($arr) {
		        $start = 1;
		        $end = count($arr) - 2;
		    	while($start <= $end){
		    		$mid = intval($start + ($end - $start) / 2); 
		    			if($arr[$mid - 1] < $arr[$mid] && $arr[$mid] > $arr[$mid + 1]){
					        return $mid;
					    }elseif($arr[$mid - 1] < $arr[$mid]){ //right
					        $start = $mid + 1;
					}else{
					        $end = $mid - 1;
				}
			  } 
		  return - 1;
		}

	$sentence = "The quick brown fox jumps over the lazy dog";

function detect_pangram($string) { 
    $alphabet = range('a', 'z');
    $string = strtolower($string);
    foreach ($alphabet as $char) {
        if (strpos($string, $char) === false) {
            return false; 
        }
        }
        return true; 
        }

if (detect_pangram($sentence)) {
    echo "The sentence is a pangram";
    } else {
        echo "The sentence is not a pangram";
    }
}
?>
