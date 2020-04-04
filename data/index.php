<?php
$text = "Сегодня 01.06.2020\n";
function next_year($matches)
{
    switch ($matches[2]):
        case "01":
            return "января";
            break;
        case "02":
            return "февраля";
            break;
        case "03":
            return "марта";
            break;
        case "04":
            return "апреля";
            break;
        case "05":
            echo "мая";
            break;
        case "06":
            return "июня";
            break;
        case "07":
            return "июля";
            break;
        case "08":
            return "августа";
            break;
        case "09":
            return "сентября";
            break;
        case "10":
            return "октября";
            break;
        case "11":
            return "ноября";
            break;
        case "12":
            return "декабря";
            break;
        default:
            return "Укажите месяц";
        endswitch;

        
    return $matches[1].$matches[2].$matches[3]." года";
}
echo preg_replace_callback("|(\d{2}.)(\d{2}.)(\d{4})|","next_year",$text);
