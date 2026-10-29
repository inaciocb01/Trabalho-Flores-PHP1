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
Descritivo:função maiorNumero que receba dois números e retorne o maior entre eles.
***************************************************************/
$numero1 = (float) readline("Digite um número ");
$numero2 = (float) readline("Digite um número ");
$resultado = maiorNumero($numero1, $numero2);

function maiorNumero($numero1, $numero2) {
    if ($numero1 > $numero2) {
        return $numero1;
    }
    return $numero2;
}

echo "O maior número é " . $resultado
/*
o codigo solicita 2 nuemros e mostra o maior deles

*/ 
?>
