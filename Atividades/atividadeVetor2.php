<?php
    $vetor[] = "";

    for ($i = 0; $i < 10; $i++) { 
        echo "Digite um número \n";
        $vetor[$i] = (int) fgets(STDIN);
    }

    $vetor = array_reverse($vetor);
    print_r($vetor);