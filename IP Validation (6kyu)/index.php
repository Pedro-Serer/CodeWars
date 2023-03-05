<?php

function isValidIP(string $str): bool
{
    $ip = explode('.', $str);

    if (count($ip) != 4) return false;

    foreach ($ip as $numero) {
        if (preg_match('/[^0-9]/', $numero) || intval($numero) > 255 || intval($numero) < 0 || 
            (strpos($numero, '0') === 0 && strlen($numero) > 1)) {
            return false;
        }
    }

    return true;
} 

echo isValidIP('127.0.0.1');