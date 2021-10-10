<?php
// incluindo cabeçalho
include_once '../include/header.php';

// get database connection
include_once '../config/database.php';

// instantiate product object
include_once '../classes/empresas.php';

$database = new Database();
$db = $database->getConnection();

$empresa = new Empresa($db);

// recuperando dados postado
$dados = json_decode(file_get_contents("php://input"));

// verificando os dados  não estão vazios
if(
    !empty($dados->pessoa) &&
    !empty($dados->contribuinte) &&
    !empty($dados->cadastro) &&
    !empty($dados->cnpj) &&
    !empty($dados->estado) &&
    !empty($dados->estadual) &&
    !empty($dados->municipal) &&
    !empty($dados->razao) &&
    !empty($dados->fantasia) &&
    !empty($dados->telefone) &&
    !empty($dados->telefoneSecundario) &&
    !empty($dados->email) &&
    !empty($dados->cep) &&
    !empty($dados->logradouro) &&
    !empty($dados->numero) &&
    !empty($dados->complemento) &&
    !empty($dados->bairro) &&
    !empty($dados->cidade) &&
    !empty($dados->pais) &&
    !empty($dados->observacao)


){

    // definir valores de propriedade do cadastro
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

    // create the product
    if($empresa->create()){

        // set response code - 201 created
        http_response_code(201);

        // tell the user
        echo json_encode(array("message" => "Empresa Cadastrado com sucesso."));
    }

    // if unable to create the product, tell the user
    else{

        // set response code - 503 service unavailable
        http_response_code(503);

        // tell the user
        echo json_encode(array("message" => "Incapaz de cadatrar empresa."));
    }
}

// tell the user data is incomplete
else{

    // set response code - 400 bad request
    http_response_code(400);

    // tell the user
    echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
}
?>
