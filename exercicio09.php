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
Descritivo: Escreva um programa que leia números do usuário até que ele digite 0 e, no final, mostre a soma de todos os números digitados.
***************************************************************/
$soma = 0;
$num01 = 1;
while ($num01 != 0) {
    echo "Quer somar números? Use 0 para cancelar a operação:";
    $num01 = (int) readline ();
    $soma = $soma + $num01;
    }
    print "A soma foi: " . $soma;
?>