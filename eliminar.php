<?php

    $vid = $_GET["id"];

    function apagar($id){
        include "conexao.php";
        $res = mysqli_query($conn, "DELETE FROM loja WHERE id=$id");
        if($res){
            echo "Usuario eliminado com sucesso";
        }else{
            echo "Falha ao elimina o usuario";
        }
    }
    apagar($vid);
?>