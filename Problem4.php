<?php
$largestPalindrome = 0;
// outer loop is first multiplier, inner loop is second multiplier
for ($i=100; $i<1000; $i++) {
    for ($j=100; $j<1000; $j++) {
        $product = $i * $j;
        // we have a product, let's check if it is a palindrome
        $productString = strval($product);
        if ($productString == strrev($productString) ) {
            // We have a palindrome, let's compare product to previous greatest product
            if ($product > $largestPalindrome) {
                $largestPalindrome = $product;
            }
        }
    }
}

// print out the largest palindrome product of two three digit numbers
echo "\r\nAnswer: " . $largestPalindrome . "\r\n";
?>