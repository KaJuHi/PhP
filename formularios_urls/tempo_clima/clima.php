<?php
const ID = "UmfMhlZ7d1U19BPQgz4K5";
const SECRET = "tTRDu9sY65Y4URB4VbcaAOS4EA8NPV6GN7SJe0kv";

const BASE_URL = "https://api.aerisapi.com/conditions/";

$foz = urlencode("foz do iguaçu");
$ara = urlencode("araquari");

$cidade = "";
$cidade = $_GET['cidade'];
$cidade = urlencode($cidade);

$url = BASE_URL .$cidade.",br?client_id=".ID."&client_secret=".SECRET;

$urlfoz = BASE_URL .$foz.",br?client_id=".ID."&client_secret=".SECRET;
$urlara = BASE_URL .$ara.",br?client_id=".ID."&client_secret=".SECRET;

$dadosjson = file_get_contents($url);
$convertido = json_decode($dadosjson, true);

$dadosjsonfoz = file_get_contents($urlfoz);
$convertidofoz = json_decode($dadosjsonfoz, true);
$dadosjsonara = file_get_contents($urlara);
$convertidoara = json_decode($dadosjsonara, true);

$nome = $convertido['response'][0]['place']['name'];
$temperatura = $convertido['response'][0]['periods'][0]['tempC'];
$sensacao = $convertido['response'][0]['periods'][0]['feelslikeC'];
$umidade = $convertido['response'][0]['periods'][0]['humidity'];
$velocidade = $convertido['response'][0]['periods'][0]['windSpeedKPH'];

$nomefoz = $convertidofoz['response'][0]['place']['name'];
$temperaturafoz = $convertidofoz['response'][0]['periods'][0]['tempC'];
$sensacaofoz = $convertidofoz['response'][0]['periods'][0]['feelslikeC'];
$umidadefoz = $convertidofoz['response'][0]['periods'][0]['humidity'];
$velocidadefoz = $convertidofoz['response'][0]['periods'][0]['windSpeedKPH'];

$nomeara = $convertidoara['response'][0]['place']['name'];
$temperaturaara = $convertidoara['response'][0]['periods'][0]['tempC'];
$sensacaoara = $convertidoara['response'][0]['periods'][0]['feelslikeC'];
$umidadeara = $convertidoara['response'][0]['periods'][0]['humidity'];
$velocidadeara = $convertidoara['response'][0]['periods'][0]['windSpeedKPH'];

require "clima_view.php";
