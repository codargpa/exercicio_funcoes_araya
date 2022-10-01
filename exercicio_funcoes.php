<?php

echo "<p>a) escrever a tabuada de um número passado por parâmetro. Exemplo: se o parâmetro for 2</p>";
//função tabuada - $n x contador do for
function tabuada($n)
{
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . $n * $i . "<br>";
    }
}
//$n, coloque o numero que vc quer multiplicar aqui
$n = 2;
echo "<h3>Tabuada $n</h3>";
// chamada da função
tabuada($n);

echo "<p>b) inverter o conteúdo de um vetor qualquer. Exemplo: se a entrada for ['a', 'z,'m'] deve devolver ['m','z','a'].</p>";
$apostolos = array("Mateus", "Marcos", "Lucas", "João");
foreach ($apostolos as $apostolo) {
    echo "Original: " . $apostolo . "<br>";
}
// sort inverte trocando o indice
sort($apostolos);
foreach ($apostolos as $apostolo) {
    echo "invetido: <font color='red'>" . $apostolo . "</font><br>";
}

echo "<p>c) que receba um vetor com números inteiros e que devolva o maior número existente no vetor.  Use apenas um laço de repetição e instrução if.</p>";
$versiculos[0]["livro"] = "mateus";
$versiculos[0]["ver"] = 18.3;
$versiculos[1]["livro"] = "marcos";
$versiculos[1]["ver"] = 7.15;
$versiculos[2]["livro"] = "lucas";
$versiculos[2]["ver"] = 22.26;
$versiculos[3]["livro"] = "joão";
$versiculos[3]["ver"] = 3.16;
print_r($versiculos);
$maior = 0;
foreach ($versiculos as $versiculo) {
//compara $maior e se for maior salva em $maior
    if ($versiculo["ver"] > $maior) {
        $maior = $versiculo["ver"];
    }
}
echo "<br>Maior Numero: <font color='red'>" . $maior."</font>";

echo "<p>d) formatar um número como CPF (###.###.###-##, onde # representa um dígito). Sugestão: completar com zeros a esquerda se a quantidade de dígitos for menor que 11. Use a função mb_strlen() para descobrir a quantidade de dígitos. E use a função mb_substr() para separar os dígitos para acrescentar os pontos e traço para formatar como CPF.</p>";
$texto = "334533242";
//valores inferiores a 11 completa com 0's
$zero = str_pad($texto, 11, 0, STR_PAD_LEFT);
//acrescenta os "." e "-"
$cpf = substr($zero, 0, 3) . "." . substr($zero, 3, 3) . "." . substr($zero, 6, 3) . "-" . substr($zero, 9, 3);
echo "<font color='red'>".$cpf."</font>";

echo "<p>e) sabendo que a fórmula para a conversão de uma temperatura em  Fahrenheit para Celsius é: c = (f-32)/18, faça uma função em PHP que mostre os valores em Celsius das seguintes temperaturas em Fahrenheit: 90º, 77º, 52º e 12º (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)</p>";
function celsius($temperatuda)
{
//valor(temperatura) - 32/18
    $c = ($temperatuda - 32) / 18;
    return $c;
}
echo "90 fahrenheit em Celsius: <font color='red'>" . celsius(90) . "</font><br>";
echo "77 fahrenheit em Celsius: <font color='red'>" . celsius(77) . "</font><br>";
echo "52 fahrenheit em Celsius: <font color='red'>" . celsius(52) . "</font><br>";
echo "12 fahrenheit em Celsius: <font color='red'>" . celsius(12) . "</font><br>";

echo '<p>f) desenvolva, em PHP, a função buscaTexto($texto, $busca), sendo $texto uma variável string que contém um texto, e $busca, um array que contém palavras a serem buscadas no texto. Cada vez que uma palavra buscada for localizada, ela deverá ser destacada na cor vermelha. A função deverá retornar o $texto com as palavras destacadas em vermelho. (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)</p>';
$busca = array( "red", "green", "yellow");
$texto ="yellow";
function buscaTexto($texto, $busca){
    foreach ($busca as $palavras) {
        $troca = "<font color='red'>" . $palavras . "</font>";
        $texto = str_replace($palavras, $troca, $texto);
    }
    return $texto;
}
echo buscaTexto($texto, $busca);

echo '<p>g) que receba um vetor de números inteiros e devolva a soma dos valores contidos nesse vetor. Use apenas um laço de repetição e instrução if.</p>';
$a = array(5, 6, 3, 9);
print_r($a);
echo "<br>soma = <font color='red'>". array_sum($a) . "</font><br>";
