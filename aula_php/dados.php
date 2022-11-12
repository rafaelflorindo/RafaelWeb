<?php
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

$i = 0;
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
<tr>
    <td><?php $i++; echo $i; ?></td>
    <td><?php echo $tutorial1["titulo"]; ?></td>
    <td><?php echo $tutorial1["descricao"]; ?></td>
    <td><?php echo $tutorial1["imagem"]; ?></td>
    <td><?php echo $tutorial1["data"]; ?></td>
    <td><?php echo $tutorial1["autor"]; ?></td>
</tr>
<tr>
    <td><?php $i++; echo $i; ?></td>
    <td><?php echo $tutorial2["titulo"]; ?></td>
    <td><?php echo $tutorial2["descricao"]; ?></td>
    <td><?php echo $tutorial2["imagem"]; ?></td>
    <td><?php echo $tutorial2["data"]; ?></td>
    <td><?php echo $tutorial2["autor"]; ?></td>
</tr>
</table>