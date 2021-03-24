<?php

    $vetor[] = "";
    $numero;

    for ($i = 0; $i < 5; $i++) { 
        echo "Escreva um número que você queira: \n";
        $vetor[$i] = (int) fgets(STDIN);
    }

    print_r($vetor);

