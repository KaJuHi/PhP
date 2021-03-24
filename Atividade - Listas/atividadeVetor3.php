<?php
    $vetor[] = "";

    for ($i=0; $i < 4; $i++) { 
        echo "Digite a nota do aluno \n";
        $vetor[$i] = (float) fgets(STDIN);
    }

    $soma = array_sum($vetor);
    $media = $soma/4;
    echo "Notas inseridas: \n";
    print_r($vetor);
    echo "Média do(a) aluno(a): ".$media;