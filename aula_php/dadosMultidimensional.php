<?php
//array unidimensional
$tutorial1 = array("id" => "1",
"titulo" => "Aula PHP",
"descricao" => "Laços de repetição e vetores",
"imagem" => "img/modeloOsi.png",
"data" => "2022-11-12",
"autor" => "Rafael"
);
$tutorial2 = array("id" => "2",
"titulo" => "Aula HTML",
"descricao" => "Formulário",
"imagem" => "img/modeloOsi.png",
"data" => "2022-11-12",
"autor" => "Rafael"
);
$tutorial3 = array("id" => "3",
"titulo" => "Aula CSS",
"descricao" => "Formulário",
"imagem" => "img/modeloOsi.png",
"data" => "2022-11-12",
"autor" => "Rafael"
);
//array multidimensional
$tutoriais = array(
    0 => $tutorial1,
    1 => $tutorial2,
    2 => $tutorial3
);
//var_dump($tutoriais);
?>
<table border="1">
<tr>
    <td>ITEM</td>
    <td>TÍTULO</td>
    <td>DESCRICAO</td>
    <td>IMAGEM</td>
    <td>DATA</td>
    <td>AUTOR</td>
</tr>
<?php
    $i = 0;//contador da linha da tabela representada no campo ITEM
    foreach($tutoriais as $key => $values){  
?>
<tr>
    <td><?php $i++; echo $i; ?></td>
    <td><?php echo $values["titulo"]; ?></td>
    <td><?php echo $values["descricao"]; ?></td>
    <td><?php echo $values["imagem"]; ?></td>
    <td><?php echo $values["data"]; ?></td>
    <td><?php echo $values["autor"]; ?></td>
</tr>
<?php
    }
?>
</table>