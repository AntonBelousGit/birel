<?php


if (!function_exists('encode_bigNumber')) {
    function encode_bigNumber($number)
    {
        $count = array("", "k", "M", "B", "T");

        $i = 0;
        while (abs($number) > 1000) {
            $number /= 1000;
            $i++;
        }

        return $number . $count[$i];
    }
}