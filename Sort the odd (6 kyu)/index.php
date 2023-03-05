<?php

    function sortArray($arr) {
        foreach ($arr as $chave => $valor) {
            if ($valor % 2 != 0) {
                $valores[$chave] = $valor;
                $chaves[$chave] = $chave;
            }
        }
        
        sort($valores);
        $novo = array_combine($chaves, $valores);
        $novo = array_replace($arr, $novo);
        
        return $novo;
    }