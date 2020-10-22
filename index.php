<?php
function checkClassName($str)
{
    $pattern = '/^[CPA]+[0-9]{4,4}+[G, H, I, K, L, M]{1}/';
    if (preg_match($pattern, $str)) {
        echo "Hop le";
    } else {
        echo "Khong hop le";
    }
}

checkClassName("C0820H1");