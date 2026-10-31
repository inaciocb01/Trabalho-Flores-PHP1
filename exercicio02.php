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
Descritivo: Crie um programa que use for para imprimir os números pares de 2 a 20.
***************************************************************/
?>
<?php
// O for começa em 2 e soma 2 a cada volta, assim só passa pelos pares.
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}
?>
