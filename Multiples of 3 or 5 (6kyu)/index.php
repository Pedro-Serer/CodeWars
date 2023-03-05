<?php

    function solution($number){
        $soma = 0;

        for ($i=0; $i<$number; $i++){
            if ($i % 3 == 0 or $i % 5 == 0) {
                $soma += $i;
            }
        }
        return $number < 0 ? 0 : $soma;
    }