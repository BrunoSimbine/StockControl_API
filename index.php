<?php

    header('Content-type: application/json');

    include "conexao.php";


    $res = mysqli_query($conn, "SELECT * FROM loja");

    $json_array = array();

    while($reg=mysqli_fetch_assoc($res)){

        $json_array[] = $reg;

    }
    echo json_encode($json_array);

?>