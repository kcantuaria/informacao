<?php
// include cabeçalho
include_once '../include/header.php';

// include database and object files
include_once '../config/database.php';
include_once '../Classes/empresas.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$empresa = new Empresa($db);

// query products
$stmt = $empresa->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // products array
    $empresas_arr=array();
    $empresas_arr["Empresa"]=array();

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extraindo a linha
        // isto fará com que $row['name'] seja
        // apenas $name apenas
        extract($row);

        $empresa_item=array(

            "id" => $id,
            "pessoa" => $pessoa,
            "contribuinte" => $contribuinte,
            "cadastro" => $cadastro,
            "cnpj" => $cnpj,
            "estado" => $estado,
            "estadual" => $estadual,
            "municipal" => $municipal,
            "razao" => $razao,
            "fantasia" => $fantasia,
            "telefone" => $telefone,
            "telefoneSecundario" => $telefoneSecundario,
            "email" => $email,
            "cep" => $cep,
            "logradouro" => $logradouro,
            "numero" => $numero,
            "complemento" => $complemento,
            "bairro" => $bairro,
            "cidade" => $cidade,
            "pais" => $pais,
            "observacao" =>  html_entity_decode($observacao)
        );

        array_push($empresas_arr["Empresa"], $empresa_item);
    }

    // set response code - 200 OK
    http_response_code(200);

    // show products data in json format
    echo json_encode($empresas_arr);
}

else{

    // set response code - 404 Not found
    http_response_code(404);

    // tell the user no products found
    echo json_encode(
        array("message" => "Empresa não Encontrada.")
    );
}
