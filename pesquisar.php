<?php
    header('Content-type: application/json');
    $vnome = $_GET["nome"];

    function pesquisar($nome){
        include "conexao.php";

        $res = mysqli_query($conn, "SELECT * FROM loja WHERE nome LIKE '%$nome%'");

        $json_array = array();
        while($reg=mysqli_fetch_assoc($res)){

            $json_array[] = $reg;
            
        }
        echo json_encode($json_array);
    }
    pesquisar($vnome);

?>