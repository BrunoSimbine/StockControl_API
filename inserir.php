<?php


$vnome = $_GET["nome"];
$vquantidade =$_GET["quantidade"];
$vpreco = $_GET["preco"];


function cadastrar($nome, $quantidade, $preco){
    include "conexao.php";

    $sql = "INSERT INTO loja VALUES (NULL, '$nome', '$quantidade', '$preco')";
    mysqli_query($conn, $sql);
    $linha = mysqli_affected_rows($conn);
    mysqli_close($conn);
    return $linha;
}


$add_itens = cadastrar($vnome, $vquantidade, $vpreco);
if ($add_itens > 0){
    echo "Produto inserido com sucesso";
}else{
    echo "Falha ao inserir o produto";
}

?>