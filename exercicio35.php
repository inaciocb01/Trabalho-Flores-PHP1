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
Descritivo: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
***************************************************************/
?>
<?php
// O procedimento usa foreach para passar por cada elemento e imprimir.
function imprimirArray($lista) {
    foreach ($lista as $item) {
        echo $item . "<br>";
    }
}

imprimirArray(["Maçã", "Banana", "Uva", "Laranja"]);
?>
