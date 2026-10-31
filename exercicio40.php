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
Descritivo: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
***************************************************************/
?>
<?php
// O procedimento recebe o array do carro e imprime cada campo pela sua chave.
function mostrarCarro($carro) {
    echo "Marca: " . $carro["marca"] . "<br>";
    echo "Modelo: " . $carro["modelo"] . "<br>";
    echo "Ano: " . $carro["ano"] . "<br>";
}

$carro = ["marca" => "Fiat", "modelo" => "Uno", "ano" => 2010];
mostrarCarro($carro);
?>
