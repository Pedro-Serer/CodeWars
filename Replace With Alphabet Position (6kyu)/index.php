<?php

    function alphabet_position($s) {
        $frase = str_split($s);
        $posicao = range('a', 'z');
        $indice = 0;
        $ret = [];

        foreach ($frase as $letra) {
            $valor = array_search(strtolower($letra), $posicao);
            $valor !== false ? $ret[$indice++] = $valor + 1 : 0;
        }

        return implode(" ", $ret);
    }