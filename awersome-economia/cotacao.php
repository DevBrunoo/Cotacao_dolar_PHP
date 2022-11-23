<?php 

require __DIR__ .'/vendor/autoload.php';

//DEPENDENCIAS
use \App\Awesome\Economia;

//INSTANCIA DA CLASSE DE API
$obEconomia = new Economia;

$dadosCotacao = new Economia;

$dadosCotacao = $obEconomia->consultarCotacao('USD','BRL');

echo "<pre>";
print_r($dadosCotacao);
echo "</pre>"; exit;