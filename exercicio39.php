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
Descritivo: Crie um procedimento contagemRegressiva que receba um número e imprima uma contagem regressiva a partir dele até 0.
***************************************************************/
?>
<?php
// O for começa no número recebido e diminui 1 até chegar em 0.
function contagemRegressiva($numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "<br>";
    }
}

contagemRegressiva(10);
?>
