<?php
function format_number($number)
{
    if ($number >= 1000000) {
        return number_format($number / 1000000, 1) . "Tr";
    } else {
        return number_format($number);
    }
}
