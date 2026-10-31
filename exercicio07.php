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
Descritivo: Crie um programa que peça ao usuário para adivinhar um número (ex: 7) e continue pedindo até que ele acerte.
***************************************************************/
?>
<?php
// O número secreto é 7. O formulário pede um palpite e o while
// continua mostrando o formulário enquanto o palpite estiver errado.
$secreto = 7;
$palpite = isset($_GET['palpite']) ? (int)$_GET['palpite'] : null;

while ($palpite !== $secreto) {
    if ($palpite !== null) {
        echo "Errou! Tente de novo.<br>";
    }
    echo '<form method="get">
            Adivinhe o número (1 a 10): <input type="number" name="palpite">
            <button type="submit">Enviar</button>
          </form>';
    exit; // espera o próximo palpite do usuário
}

echo "Parabéns! Você acertou, o número era $secreto.";
?>
