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
Descritivo: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi 'Aprovado' (média >= 7) ou 'Reprovado'.
***************************************************************/
?>
<?php
// Soma as duas notas, divide por 2 e verifica se a média é 7 ou mais.
function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    echo "Média: $media<br>";
    if ($media >= 7) {
        echo "Aprovado<br>";
    } else {
        echo "Reprovado<br>";
    }
}

calcularMediaAluno(8, 6.5);
?>
