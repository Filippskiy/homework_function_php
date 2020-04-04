<?php
function work($position,$year)
{
    if($position == "уборщик"&& $year < 2)
        $salary = 1500;
    else if ($position == "директор"&& $year < 2)
        $salary = 3000;
    else if ($position == "директор"&& $year > 2)
        $salary = 4500;
    else
        $salary=2000;
    echo "Ваша должность: $position , ваш стаж работы: $year, ваша зарплата: $salary грн.<br/>";
}
call_user_func('work',"уборщик",1.5);
call_user_func('work',"директор",3);
call_user_func('work',"уборщик",2);
call_user_func('work',"директор",1);
?>