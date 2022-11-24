<?php
/*$variavel = 110;
$a = 23.78;
$c = "teste";
$d = true;
$e = false;

echo $a;
echo "<br>Conteúdo da variável c $c";
echo "<br>Conteúdo da variável c " . $c;
//Conteúdo da variável c teste
$f = $c . " " . $a;
echo "<br>" . $f;

$soma = ($variavel + $a) - $a / $variavel;
echo "<br> soma = " . $soma;

//condicional simples
if($e){
    echo "<br>Verdade";
}

//condicional composta
if($e){
    echo "<br>Verdade";
}else{
    echo "<br>Não Verdade";
}

echo "<hr>";
//condicional aninhada/encadeada
if($t){
    echo "<br>Verdade";
}elseif($variavel != 10){
    //= atribuição
    //== igualdade de valor

    echo "<br>igual a 10";
}else{
    echo "<br>outra coisa";
}
echo "<hr>";
//laço de repetição
//contado
$soma = 0;
for($i = 1; $i < 10; $i++){
    //echo "-";
    $soma = $soma + $i;//0+1=1 1+2=3 3+2=5
}
echo $soma;
echo "<br>Laço FOR</br>";
for($i = 0; $i < 100; $i++){
    //echo "-";
}
//condicional
$i = 0;
$soma = 0;
while($i < 10){//testa no inicio
    //echo "-";
    $soma = $soma + $i;//0+1=1 1+2=3 3+2=5
    $i++;
}
echo $soma;
$i = 0;
$soma = 0;
do{//executa no mínimo uma vez
    $soma = $soma + $i;//0+1=1 1+2=3 3+2=5
    $i++;
}while($i < 10);
echo "<br>" . $soma;

echo "<hr>";
$idade = [5,10,20];
$idade[30] = 45;
echo "Idade = " .$idade[30];
echo "<br>";
print_r($idade);
echo "<br>";

$vendas[0] = 125.89;
$vendas[1] = 456.57;
print_r($vendas);

$idade[2] = 55;
echo "<br>";
print_r($idade);

$nomes = ["GOL", "FIAT 147", "FUSCA"];
echo "<br>";
print_r($nomes);
$nomes["FIAT"] = "FIAT Marea";//o php permite dar nome ao indice
echo "<br>";
print_r($nomes);

$carro = array(
    0 => "GOL",
    1 => "FIAT 147"
);
echo "<br>";
print_r($carro);

$carro = array(
    "GOL" => "GOL 1.0",
    "FIAT" => "FIAT 147 1.3"
);
echo "<br>";
print_r($carro);

//iteração
echo "<br>";
foreach($carro as $key => $values){//recomendado para array
    echo "<br>" . $key ." - ". $values;
}

*/
$pessoa = array(
    0 => array("nome"=>"Rafael", "sobrenome"=>"Florindo"),
    1 => array("nome"=>"Rafael1", "sobrenome"=>"Florindo1"),
    2 => array("nome"=>"Rafael2", "sobrenome"=>"Florindo2"),
);
?>
<table border=1>
    <tr>
        <td>ITEM</td>
        <td>NOME</td>
        <td>SOBRENOME</td>
    </tr>
<?php
    $i = 1;
    foreach($pessoa as $key => $values){//recomendado para array
    ?>
    <tr>
        <td><?=$i++;?></td>
        <td><?=$values["nome"];?></td>
        <td><?=$values["sobrenome"];?></td>
    </tr>
<?php
}