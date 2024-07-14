<?php
function toHijriah($tanggal)
{
    $array_month = array("Muharram", "Safar", "Rabiul Awwal", "Rabiul Akhir", "Jumadil Awwal", "Jumadil Akhir", "Rajab", "Sya'ban", "Ramadhan", "Syawwal", "Zulqaidah", "Zulhijjah");

    $date = intval(substr($tanggal, 8, 2));
    $month = intval(substr($tanggal, 5, 2));
    $year = intval(substr($tanggal, 0, 4));

    if (($year > 1582) || (($year == "1582") && ($month > 10)) || (($year == "1582") && ($month == "10") && ($date > 14))) {
        $jd = intval((1461 * ($year + 4800 + intval(($month - 14) / 12))) / 4) +
            intval((367 * ($month - 2 - 12 * (intval(($month - 14) / 12)))) / 12) -
            intval((3 * (intval(($year + 4900 + intval(($month - 14) / 12)) / 100))) / 4) +
            $date - 32075;
    } else {
        $jd = 367 * $year - intval((7 * ($year + 5001 + intval(($month - 9) / 7))) / 4) +
            intval((275 * $month) / 9) + $date + 1729777;
    }

    $wd = $jd % 7;
    $l  = $jd - 1948440 + 10632;
    $n  = intval(($l - 1) / 10631);
    $l  = $l - 10631 * $n + 354;
    $z  = (intval((10985 - $l) / 5316)) * (intval((50 * $l) / 17719)) + (intval($l / 5670)) * (intval((43 * $l) / 15238));
    $l  = $l - (intval((30 - $z) / 15)) * (intval((17719 * $z) / 50)) - (intval($z / 16)) * (intval((15238 * $z) / 43)) + 29;
    $m  = intval((24 * $l) / 709);
    $d  = $l - intval((709 * $m) / 24);
    $y  = 30 * $n + $z - 30;
    $g  = $m - 1;

    $hijriah = "$d $array_month[$g] $y H";

    return $hijriah;
}

function set_active($uri, $output = 'active')
{
    if (is_array($uri)) {
        foreach ($uri as $u) {
            if (Request::is($u)) {
                return $output;
            }
        }
    } else {
        if (Request::is($uri)) {
            return $output;
        }
    }
}

function set_active_mainmenu($uri, $output = 'active open')
{
    if (is_array($uri)) {
        foreach ($uri as $u) {
            if (Request::is($u)) {
                return $output;
            }
        }
    } else {
        if (Request::is($uri)) {
            return $output;
        }
    }
}

function generateRandomText($length = 10)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $randomText = '';

    for ($i = 0; $i < $length; $i++) {
        $randomText .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomText;
}
