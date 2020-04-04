<?php
define("SIGN", "Деканат. ");
define("DATE",date("d.m.Y "));
$events = array(
    "grants" => "вам начислена стипендия.",
    "expelled" => "вас отчислили.",
    "olympiad" => "вам полагается премия за участие в олимпиаде.",
    "good_study" => "благодарим вас за успехи в учебе.");

$people = array(
    "ivan" => array(
        "name" => "Иван Иванов",
        "email" => "ivan@mail.com"),
    "petr" => array(
        "name" => "Петр Петров",
        "email" => "petr@mail.com"),
    "vasya" => array(
        "name" => "Вася Васильев",
        "email" => "vasya@mail.com"),
    "semen" => array(
        "name" => "Семен Семенов"));

$event["ivan"] = "grants";
$event["petr"] = "expelled";
$event["semen"] = "olympiad";
$event["vasya"] = "good_study";