<?php
header("Content-Type: application/json; charset=UTF-8");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

/*Essa variável recebe o metodo utilizado pode ser POST, GET, PUT ou DELETE*/
$metodoSolicitado = $_SERVER['REQUEST_METHOD'];

/* Esse id é quando colocamos informações na URL*/
$id = $_GET['id'] ?? null;

/*?? significa que se $_GET['id'] não existir e não for nula o conteúdo entra na variável id */
switch($metodoSolicitado){
    case "POST":
        $dados_recebidos = json_decode(file_get_contents("php://input"), true);
        break;
    case "GET":
        echo "{ 'Veio do navegador' } ";
        break;
}

?>