<?php
const URL = "https://pokeapi.co/api/v2/pokemon/";

$pokemons = [];

for ($i = 1; $i <= 15; $i++) { 
    $id = $i;
    $url = URL.$id;

    $result = file_get_contents($url);

    $vetor = json_decode($result, true);

    $pokemons[$i]['nome'] = $vetor['name'];
    $pokemons[$i]['peso'] = $vetor['weight'];
    $pokemons[$i]['altura'] = $vetor['height'];
    $pokemons[$i]['habilidades'] = $vetor['abilities'];
    $pokemons[$i]['imagem'] = $vetor['sprites']['other']['dream_world']['front_default'];
}

include "pokedex_view.php";
