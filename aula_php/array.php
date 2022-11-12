<?php
/*echo "<pre>";
$idade = [15, 35, 40];
var_dump($idade);
$idade[2]= 55;
$idade[3]= 8.9;
$idade[4]= "Rafael";
var_dump($idade);
echo "</pre>";

for($i = 0; $i<5; $i++){
    //echo "<br>" . $idade[$i];
    echo "<br> $idade[$i]";
}
*/
$idade = [15, 35, 40, 5.8, "rafael"];
$idade["nome"]= "Jose";

foreach($idade as $key => $value ){
    echo "<br>[$key] = $value";
}

//id, titulo, descricao, imagem, data, autor

