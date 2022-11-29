<?php

function genPsw($number)
{

    $alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $special = ['!', '?', '$', '?', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '[', '}', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '?', '/'];

    $psw = [];

    while (sizeof($psw) < $number) {
        $sort = rand(1, 4);
        if ($sort === 1) {
            $provv = array_rand($alphabet, 1);
            $psw[] = $alphabet[$provv];
        } elseif ($sort === 2) {
            $provv = array_rand($num, 1);
            $psw[] = $num[$provv];
        } elseif ($sort === 3) {
            $provv = array_rand($alphabet, 1);
            $psw[] = strtoupper($alphabet[$provv]);
        } else {
            $provv = array_rand($special, 1);
            $psw[] = $special[$provv];
        }
    }

    return implode($psw);
}

?>