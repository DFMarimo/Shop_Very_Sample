<?php

use Carbon\Carbon;

function upload($upladed)
{
    $year = Carbon::now()->year;
    $month = Carbon::now()->month;
    $day = Carbon::now()->day;
    $hour = Carbon::now()->hour;
    $min = Carbon::now()->minute;
    $sec = Carbon::now()->second;
    $microSec = Carbon::now()->microsecond;

    $nameOriginal = $upladed;

    $fileName = $year . "_" . $month . "_" . $day . "_" . $hour . "_" . $min . "_" . $sec . "_" . $microSec . "_" . $nameOriginal;

    return $fileName;
}
