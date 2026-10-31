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
Descritivo: Faça um programa que imprima os múltiplos de 3, de 3 a 30.
***************************************************************/
?>
<?php
// O while começa em 3 e soma 3 a cada volta até chegar em 30.
$i = 3;
while ($i <= 30) {
    echo $i . "<br>";
    $i += 3;
}
?>
