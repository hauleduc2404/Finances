<?php

use Carbon\Carbon;

if (!function_exists('vnd_format')) {
    function vnd_format($money): string
    {
        if (!$money) {
            return '0đ';
        }
        return number_format($money, 0, ',', '.') . 'đ';
    }
}

if (!function_exists('vn_date_format')) {
    function vn_date_format($dateString, $isIncludeHourAndMinute = false): string
    {
        if (!$dateString) {
            return '';
        }

        if ($isIncludeHourAndMinute) {
            return Carbon::createFromTimeString($dateString)->format('H:i d/m/Y');
        }

        return Carbon::createFromTimeString($dateString)->format('d/m/Y');
    }
}
