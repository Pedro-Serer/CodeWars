<?php

    function duplicate_encode($word) {
        $word = strtolower($word);
            $palavra = str_split($word);

        foreach ($palavra as $letra) {
            substr_count($word, $letra) > 1 ? $n .= ")" : $n .= "(";
        }

        return $n;
    }