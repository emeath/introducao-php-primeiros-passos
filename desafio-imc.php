<?php

$peso = 75.4;
$altura = 1.80;

$imc = $peso / ($altura * $altura);

if($imc >= 16 && $imc < 17){
    echo "Muito abaixo do peso" . PHP_EOL;
} else if($imc >= 17 && $imc < 18.5){
    echo "Abaixo do peso" . PHP_EOL;
} else if($imc >= 18.5 && $imc < 25){
    echo "Peso normal" . PHP_EOL;
} else if($imc >= 25 && $imc < 29.9){
    echo "Acima do peso" . PHP_EOL;
} else if($imc >= 30 && $imc < 34.9){
    echo "Obesidade Grau I" . PHP_EOL;
} else if($imc >= 35 && $imc < 40){
    echo "Obesidade Grau II" . PHP_EOL;
} else {
    echo "Error";
}