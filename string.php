<?php

$string = ['Hello','World','PHP','Programming'];


$j =-1;
foreach($string as $one){ $j++;
    echo "Original String: $string[$j],
    Vowel Count:".preg_match_all('/[aeiou]/i',$string[$j],$matches).
    ", Reversed String: ". strrev($string[$j]);
    echo '<br> <br>';
}


// echo '<br>';
// echo "Original String: $string[0],
// Vowel Count:".preg_match_all('/[aeiou]/i',$string[0],$matches).
// ", Reversed String: ". strrev($string[0]);

?>






<style>
    *{font-weight:600;}
</style>