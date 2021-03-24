<?php
    /*
        Prof, aqui eu iniciei a variavel de contagem do for
        no 1 porque me confundiu um pouco quando foi retornar 
        os valores
    */ 
    $vetor[] = "";

    for ($i=1; $i <= 10; $i++) { 
        echo "Insira um número inteiro: \n";
        $vetor[$i] = (int) fgets(STDIN);
    }

    
    for ($i=1; $i <= 10; $i++) { 
        if ($vetor[$i] % 2 == 0) {
            echo "Número: ".$vetor[$i]."   Índice: ".$i."\n";
        }
    }