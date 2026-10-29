



<?php
/***************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2
Componentes:
 RA 26008762-2 - Caik dos Santos Cassiano
 RA 26007934-2 - Inácio Correa Barbosa
 RA 26008105-2 - Jonathan Manuel Rodríguez Barba
 RA 26008853-2 - Kaylane Rosa Domingos
 RA 26003569-2 - Lucas Eduardo Ferreira Branco
 RA 26014449-2 - Vitor Hugo Carvalho Stenger
Data: 04 de Novembro de 2026
Descritivo:Função chamada somar que receba dois números e retorne a soma deles
***************************************************************/

$numero1 = (float) readline("Digite um número ");
$numero2 = (float) readline("Digite um número ");
$resultado = soma($numero1, $numero2);




function soma($numero1, $numero2) {
    return $numero1 + $numero2;
    
};


echo "O resultado é " . $resultado

/*  
O código solicita dois numeros e soma eles


*/
?>
