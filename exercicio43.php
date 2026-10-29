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
Descritivo:função converterParaMaiusculas que receba uma string e a retorne em letras maiúsculas.
***************************************************************/
$texto = (string) readline("Digite um texto");
$textoM = converterM($texto);


function converterM($texto){
    return mb_strtoupper($texto, 'UTF-8');
}



echo $textoM

/*O codigo converte pra maiuscula o texto digitado */
?>

