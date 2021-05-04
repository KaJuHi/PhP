<?php
    $nome = [
        "a" =>"água com limão ", 
        "b" =>"Bacon ", 
        "c" =>"Cúrcuma ", 
        "d" =>"Doce de leite ",
        "e" =>"Azeite ",
        "f" =>"Frango ",
        "g" =>"Gengibre ",
        "h" =>"Adoçante ",
        "i" =>"Açucar ",
        "j" =>"Jiló ",
        "k" =>"Comida Japonesa ",
        "l" =>"Leite ",
        "m" =>"Macarrão ",
        "n" =>"Nata ",
        "o" =>"Ovo ",
        "p" =>"Pizza ",
        "q" =>"Óleo de coco ",
        "r" =>"Rabanada ",
        "s" =>"Suco detox ",
        "t" =>"Sal rosa ",
        "u" =>"Glutamina ",
        "v" =>"Caju ",
        "w" =>"Peixe ",
        "x" =>"Própolis ",
        "y" =>"Kumbucha ",
        "z" =>"Peixe "
    ];

    $meses = [
        "ao acordar ",
        "pré-treino ",
        "amassado com limão ",
        "no cabelo ",
        "em Jejum ",
        "de 3 em 3 horas ",
        "no chá ",
        "no café ",
        "Depois das 18h00 ",
        "antes da aula ",
        "misturado na àgua ",
        "antes do almoço "
    ];
    
    $dias = [
        "diminiu o inchaço",
        "previne infarto",
        "cura TPM",
        "emagrece",
        "diminui vontade de doce",
        "mata",
        "limpa o fígado",
        "remove todas as toxinas",
        "previne diabetes",
        "cura dores de cabeça",
        "causa depressão",
        "vicia",
        "elimina barriga",
        "te deixa mais bonito(a)",
        "acaba com a celulite",
        "faz o cbelo crescer",
        "diminui o estresse",
        "melhora a TPM",
        "remove espinhas",
        "elimina ansiedade",
        "aumenta libido",
        "te deixa musculos@",
        "rejuvenesce",
        "dá barriga",
        "dá celulite",
        "elimina indisposição",
        "limpa as artérias",
        "ajuda a desinchar"
    ];

    $frase = "";

    $letra = $_GET['letra'];
    $mes = $_GET['mes'];
    $dia = $_GET['dia'];

    foreach ($nome as $key => $value) {
        if ($key == $letra) {
            $frase = $frase.$value;
        }
    }

    foreach ($meses as $key => $value) {
        if ($key == $mes) {
            $frase = $frase.$value;
        }
    }

    foreach ($dias as $key => $value) {
        if ($key == $dia) {
            $frase = $frase.$value;
        }
    }

    require "gerador_view.php";
