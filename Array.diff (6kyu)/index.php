<?php
	function arrayDiff($a, $b) {
    	$novo = array_diff($a, $b);
        $indice = 0;
        $ret = [];
            
        foreach ($novo as $chave => $valor) {
            $ret[$indice++] = $valor;
        }
        
    	return $ret;
	}