<?php 
function books($name,$name_a,$year,$edit){
$a = [$name,$name_a,$year,$edit];
for($i = 0;$i < count($a);$i++){
if(empty($a[$i])==true){
    $a[$i]="-";
}
}
echo implode(", ",$a);
}
books("Война и мир","",1863,"Эксмо");