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
