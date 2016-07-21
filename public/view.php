<?php


//---------------- View ----------------//


function formatNumber($number) {
    if (strlen($number) == 7) {
        return substr($number, 0, 3) . '-' . substr($number, 3);
    }
    if (strlen($number) == 10) {
        return substr($number, 0, 3) . '-' . substr($number, 3, 3) . '-' . substr($number, 6);
    }
    return $number;
}
