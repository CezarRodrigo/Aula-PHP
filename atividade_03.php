<!--Desenvolva um algoritmo PHP que com base em quatro valores quaisquer (A, B, C e D) efetue a soma
entre A e D e a divisão de B com C. Verifique se o resultado da soma é maior, menor ou igual ao
resultado da divisão.-->
<?php
$A = 6;
$B = 30;
$C = 3;
$D = 4;

$soma = $A + $D;
$divisao = $B / $C;

if($soma == $divisao){
    echo 'o resultado da soma é igual ao da divisão';
}
if($soma > $divisao) {
    echo 'o resultado da soma é maior que o da divisão';
}
if($soma < $divisao){
    echo 'o resultado da soma é menor que o da divisão';
}

?>

