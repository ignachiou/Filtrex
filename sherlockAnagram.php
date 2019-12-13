<?php

$a = "abbaabbaabbaabba";

echo sherlockAndAnagrams($a);

function sherlockAndAnagrams($s) {

    $s = "abba";
    $n = strlen($s);
    $l=-1;
    $c1 = [];
    $c2 = [];
    $r = 0;

    for($i=0;$i<$n-1;$i++){
        for($j=0;$j<$n+$l;$j++){

            $s1 = substr($s,$j,$i+1);
            $c1 = str_split($s1);
            sort($c1); 

            for($k=$j+1;$k<$n-$i;$k++){
                        
                $s2 = substr($s,$k,$i+1);
                $c2 = str_split($s2);
                sort($c2);
                if($c1 == $c2){
                    $r++;
                }
            }
        }
        $l--;

    }

    return $r;

}