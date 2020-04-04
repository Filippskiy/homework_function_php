<?php
function power($n,$pow){
    if($pow==0){
        $n=1;
    }else{
    for($i=1;$i<$pow;$i++){
        $n*=$n  ;
    }
}
print_r($n);
}
power(2,1);