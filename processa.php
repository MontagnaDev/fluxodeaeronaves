<?php

session_start();

include_once("conexao.php");

$modelo = filter_input(INPUT_POST, 'modelo');
$compania = filter_input(INPUT_POST, 'compania');

$result_aeronaves =  "INSERT INTO aeronavestabela (modelo, compania, criado) VALUES ('$modelo', '$compania', NOW())";
$resultado_aeronaves = mysqli_query($conn, $result_aeronaves);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Aeronave Adicionada Com Sucesso !</p>";
    
    header("Location: index.php");
}else {
    $_SESSION['msg'] = "<p style='color:red;'>Aeronave não Foi Adicionada Com Sucesso !</p>";

    header("Location: index.php");

}