<?php
// required headers
include_once '../include/header.php';
// include database and object files
include_once '../config/database.php';
include_once '../Classes/Empresas.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$empresa = new Empresa($db);

// get id of product to be edited
$dados = json_decode(file_get_contents("php://input"));

// set ID property of product to be edited
$empresa->id = $dados->id;

// sentando proprienda e valores da empresa
$empresa->pessoa = $dados->pessoa;
$empresa->contribuinte = $dados->contribuinte;
$empresa->cadastro = $dados->cadastro;
$empresa->cnpj = $dados->cnpj;
$empresa->estado = $dados->estado;
$empresa->estadual = $dados->estadual;
$empresa->municipal = $dados->municipal;
$empresa->razao = $dados->razao;
$empresa->fantasia = $dados->fantasia;
$empresa->telefone = $dados->telefone;
$empresa->telefoneSecundario = $dados->telefoneSecundario;
$empresa->email = $dados->email;
$empresa->cep = $dados->cep;
$empresa->logradouro = $dados->logradouro;
$empresa->numero = $dados->numero;
$empresa->complemento = $dados->complemento;
$empresa->bairro = $dados->bairro;
$empresa->cidade = $dados->cidade;
$empresa->pais = $dados->pais;
$empresa->observacao = $dados->observacao;


// update the product
if($empresa->update()){

    // set response code - 200 ok
    http_response_code(200);

    // tell the user
    echo json_encode(array("message" => "Alterado com sucesso."));
}

// if unable to update the product, tell the user
else{

    // set response code - 503 service unavailable
    http_response_code(503);

    // tell the user
    echo json_encode(array("message" => "Incapaz de atualizar a empresa."));
}
?>
