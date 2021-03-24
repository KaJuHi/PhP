<?php
    $vetor[] = "";
    $vezes = 0;

    for ($i=0; $i < 30; $i++) { 
        $vetor[$i] = rand(1, 15);
    }

    echo "Digite um número entre 0 e 14: \n";
    $numero = (int) fgets(STDIN);

    for ($i=0; $i < 30; $i++) { 
        if ($numero == $vetor[$i]) {
            echo "Número ".$vetor[$i]." encontrado na posição: ".$i."\n";
            $vezes++;
        }
    }

    echo "Número de repetições do número escolhido: ".$vezes;