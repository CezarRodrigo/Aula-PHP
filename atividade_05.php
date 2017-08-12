<!--Desenvolva um algoritmo PHP que com base em quatro notas de um determinado aluno, calcule a
média aritmética das notas informadas e imprima um mensagem informando se o aluno está passado
(nota>7), se o aluno está em recuperação (nota>5 e nota<7) ou se o aluno está reprovado (nota<5).-->

<?php
$N1 = 10;
$N2 = 8;
$N3 = 8.5;
$N4 = 9.5;

$Media = ($N1 + $N2 + $N3 + $N4) /4;
if($Media >= 7){
    echo " Aprovado";
}if($Media < 5){
        echo"Reprovado";
    }
    if($Media < 7 && $Media >=5){
        echo"Em Exame";
    }
 
?>

