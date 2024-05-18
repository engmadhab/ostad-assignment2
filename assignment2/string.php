<?php
function countVowels($strings) {
    $vowelCount = 0;
    $vowels = "aeiouAEIOU";
    
    for ($i = 0; $i < strlen($strings); $i++) {
        if (strpos($vowels, $strings[$i]) !== false) {
            $vowelCount++;
        }
    }
    
    return $vowelCount;
}

$strings = ["Hello", "World", "PHP", "Programming"];
// echo count($string);
foreach($strings as $text){
    echo "Original String: {$text}, Vowel Count: " . countVowels($text). ", "."Reversed String: ".strrev($text) ."\n";
}
?>