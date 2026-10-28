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
Descritivo: Crie um array com 5 nomes de cidades.
***************************************************************/
$cidades_do_Parana = ["Curitiba", "Umuarama", "Maringá", "Colombo", "Pitanga"];

echo "escolha um número de 0 a 4 para mostrar uma cidade:";
echo "\n O número escolhido foi:";
$numeroescolhido = (int) readline();
echo $cidades_do_Parana[$numeroescolhido];

?>