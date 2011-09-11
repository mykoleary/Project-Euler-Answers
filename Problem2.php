<?php
// 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
$twoAgo = 1; 
$oneAgo = 2; 
$next = 3;  
$total = 2; // start total at two since we are summing evens, and 2 isn't part of loop
$highestFibNumber = 4000000;

echo $twoAgo . " " . $oneAgo;
do {
    // print the remainder of the Fibonacci sequence
    $next = $twoAgo + $oneAgo;
    $twoAgo = $oneAgo;
    $oneAgo = $next;
    echo " " . $next;
    
    if ($next % 2 == 0) {
        // number is even, let's sum it
        $total = $total + $next;
    }

} while ($next < $highestFibNumber);
echo "\r\nAnswer: " . $total . "\r\n";
?>