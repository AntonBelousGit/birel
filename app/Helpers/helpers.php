<?php


if (!function_exists('encode_bigNumber')) {
    function encode_bigNumber($number)
    {
        $count = array("", "k", "mn", "bn", "t");

        $i = 0;
        while (abs($number) > 1000) {
            $number /= 1000;
            $i++;
        }

        if ($i < 3) {
            return round(number_format($number, 1), 1) . $count[$i];
        }
        return number_format($number, 2) . $count[$i];
    }
}
