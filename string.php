<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowel_count = preg_match_all('/[aeiou]/i', $string, $matches);

    // Reverse string
    $reversed_string = strrev($string);

    // Print output
    echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string\n";
}
?>
