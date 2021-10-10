<?php
// required headers
include_once '../include/header.php';
// include database and object file
include_once '../config/database.php';
include_once '../Classes/Empresas.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$empresa = new Empresa($db);

// get product id
$dados = json_decode(file_get_contents("php://input"));

// set product id to be deleted
$empresa->id = $dados->id;

// delete the product
if($empresa->delete()){

    // set response code - 200 ok
    http_response_code(200);

    // tell the user
    echo json_encode(array("message" => "Dados deletado com sucesso."));
}

// if unable to delete the product
else{

    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
    echo json_encode(array("message" => "Impossivel deletar empresa."));
}
?>
