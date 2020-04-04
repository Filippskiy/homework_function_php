<?php
require("data.php");

foreach ($people as $key => $man_info) {
    $event_key = $event[$key];
    if ($event_key != "") {
        $str = "\n" . DATE . SIGN ."\n";
        foreach ($man_info as $key1 => $info) {
            if ($key1 == "name")
                $str .= "Уважаемый $info!";
            if ($key1 == "email")
                $email = $info;
        }

        
        $str .= "\nИнформируем: " .
                $events[$event_key];
        switch ($event_key) {
            case "grants":
                $str .= "\nПроверьте баланс карты";
                break;
            case "expelled":
                $str .= "\nПриходите в деканат за документами";
                break;
            case "olympiad":
                $str .= "\nНагрождение состоится торжественно!";
                break;
            case "good_study":
                $str .= "\nПродолжайте в том же духе!";
                break;
            default: $str .= "\nИзвините, но Вас пока никуда не приглашают...";
        }
        
        echo $str;
    }
}