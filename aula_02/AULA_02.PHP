<?php
// Tipo de dados em variáveis
$nome = "Maria"; // string
$idade = 18; // number, inteiro
$altura = 1.62; // number, decimal
$matriculado = true; // boolean
$materias = array("Matemática","História","Fisica"); //Array

//echo "Nome: " . $nome;
//echo "\n Idade: " . $idade;
//echo "\n Altura : " . $altura;
//echo "\n Matriculado: " . ($matriculado ? "Sim" : "Não");
//echo "\n Materias:" . implode ("," ,$materias);

// Estruturas condicionais - if , else if, else
// Se a nota For a partir de 6, ele passou de série
//$notaFinal = 3;
//if($notaFinal >= 6) {
  //  echo "Aluno aprovado!";
//} //else if ($notaFinal < 6) {
   // echo "Aluno Reprovado!";
//}else {
  //  echo "Nota inválida!";
//}
// Operadores de comparação    
//>= - Maior e igual
//<= - Menor e igual
// > -Maior
//< -
//
// != - Diferente
//
// Operadores Lógicos
//and(e) - && -true e true = true
//or(ou) -|| -true efalse = true
//Para a aluna ser aprovada, precisa que a nota final seja a partir de 60 E que a frequencia seja a partida de 75%.
// $notaAlunaFinal = 70;
// $frequenciaAluna = 85; // Percentual de presença
// if( $notaAlunaFinal >= 60 && $frequenciaAluna >= 75) {
//     echo "Aluna aprovada";
// } else {
//     echo "Aluna reprovada!";
// }

//Para a aluna ser aprovada, precisa que a nota final seja a partir de 60 E que a frequencia seja a partida de 75%.
$notaAlunaFinal = 70;
$frequenciaAluna = 45; // Percentual de presença
if($notaAlunaFinal >= 60 || $frequenciaAluna >= 75){
   echo "Aluna aprovada!";
}
