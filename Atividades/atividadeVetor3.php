<?php
    $vetor[] = "";

    for ($i=0; $i < 4; $i++) { 
        echo "Digite a nota do aluno \n";
        $vetor[$i] = (float) fgets(STDIN);
    }

    $vetor = array_sum($vetor);
    $media = $vetor/4;
    echo "Média do(a) aluno(a): ".$media;