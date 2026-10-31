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
Descritivo: Elabore um procedimento verificarParImpar que receba um número e imprima se ele é 'Par' ou 'Ímpar'.
***************************************************************/
?>
<?php
// Se o resto da divisão por 2 for 0, o número é par; senão, é ímpar.
function verificarParImpar($numero) {
    if ($numero % 2 == 0) {
        echo "$numero é Par<br>";
    } else {
        echo "$numero é Ímpar<br>";
    }
}

verificarParImpar(4);
verificarParImpar(7);
?>
