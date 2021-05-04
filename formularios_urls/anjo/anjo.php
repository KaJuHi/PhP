<?php
    $diastring = $_GET['dia'];
    $messtring = $_GET['mes'];
    $anostring = $_GET['ano'];

    $dia = (int)$diastring;
    $mes = (int)$messtring;
    $ano = (int)$anostring;
    /*$dia = 12;
    $mes = 9;
    $ano = 2003;*/
    
    function somatorio($mes){
        $valor = $mes;
        $array[] = 0;

        for ($i = 0; $i < $valor; $i++) { 
            $array[$i] = $mes;
            $mes--;
        }
        return array_sum($array);
    }

    function safadeza($dia, $mes, $ano){
        $valordia = 50 - $dia;
        $valorano = $ano / 100;
        
        $naoanjo = $valordia + somatorio($mes) + $valorano;
        $anjo = 100 - $naoanjo;

        echo "<p>Sua porcentagem de não anjo é: ".$naoanjo."</p>";
        echo "<p>Sua porcentagem de anjo é: ".$anjo."</p>";
    }

    safadeza($dia, $mes, $ano);
    require "anjo_view.php";