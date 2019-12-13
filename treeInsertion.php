<?php

$a = [6,4,2,1,8,9,5];
$m = $a[0];
$l = 0;
$r = 0;
$c = count($a);
$response = "NO";
$insertion = [];

echo treeInsertion($a);

function treeInsertion($a){

    do{ 
        
        if($a[$i] < $m && $r==0){

            if($l!=0 && $l> $a[$i] ){
                $l = $a[$i];
                $insertion[] = $l; 
                
            }elseif($l!=0 && $l < $a[$i]){
                $l = $a[$i];
                $insertion[] = $l;
                     
            }else{
                $insertion[] = $a[0];
                $l = $a[0];
            }
            $response = "YES";

        }elseif($a[$i] > $m){

            $r = $a[$i];
            $response = "YES";

        }else{
            $response = "NO";
                break 1;
        }
        
        $i++;
    }while($i<$c);

    return $response;
}


?>