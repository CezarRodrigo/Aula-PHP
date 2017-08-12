<!--Desenvolva um algoritmo PHP que com base no valor da gasolina e no valor do álcool ele informe se é
mais econômico abastecer com gasolina ou com álcool.
a) valor da gasolina * 0.7, se o resultado for maior que o valor do álcool “abasteça com álcool”, senão
“abasteça com gasolina”.-->
<?php
$gasolina = 4.19;
$alcool = 2.90;

$teste = $gasolina * 0.7;

if($teste > $alcool){
    echo " abasteça com álcool";
} else{
    echo"abasteça com gasolina";
}
?>

