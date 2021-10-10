<?php
// include cabeçalho
include_once '../include/header.php';
// include database and object files
include_once '../config/database.php';
include_once '../Classes/Empresas.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// instanciando a classe
$empresa = new Empresa($db);

// definindo registro para busca
$empresa->id = isset($_GET['id']) ? $_GET['id'] : $empresa->id;
$empresa->cnpj = isset($_GET['cnpj']) ? $_GET['cnpj'] : $empresa->cnpj;
$empresa->razao = isset($_GET['razao']) ? $_GET['razao'] : $empresa->razao;
$empresa->fantasia = isset($_GET['fantasia']) ? $_GET['fantasia'] : $empresa->fantasia;
$empresa->pessoa = isset($_GET['pessoa']) ? $_GET['pessoa'] : $empresa->pessoa;
$empresa->contribuinte = isset($_GET['contribuinte']) ? $_GET['contribuinte'] : $empresa->contribuinte;
$empresa->cadastro = isset($_GET['cadastro']) ? $_GET['cadastro'] : $empresa->cadastro;

// leia os detalhes da emoresa  a ser editado
$empresa->readOne();

if($empresa->id!=null){
    // create array

    $empresa_arr = array(

        "id" => $empresa->id,
        "pessoa" => $empresa->pessoa,
        "contribuinte" => $empresa->contribuinte,
        "cadastro" => $empresa->cadastro,
        "cnpj" => $empresa->cnpj,
        "estado" => $empresa->estado,
        "estadual" => $empresa->estadual,
        "municipal" => $empresa->municipal,
        "razao" => $empresa->razao,
        "fantasia" => $empresa->fantasia,
        "telefone" => $empresa->telefone,
        "telefoneSecundario" => $empresa->telefoneSecundario,
        "email" => $empresa->email,
        "cep" => $empresa->cep,
        "logradouro" => $empresa->logradouro,
        "numero" => $empresa->numero,
        "complemento" => $empresa->complemento,
        "bairro" => $empresa->bairro,
        "cidade" => $empresa->cidade,
        "pais" => $empresa->pais,
        "observacao" => $empresa->observacao
    );

    // set response code - 200 OK
    http_response_code(200);

    // make it json format
    echo json_encode($empresa_arr);
}

else{
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user product does not exist
    echo json_encode(array("message" => "Empresa não existe."));
}
?>
