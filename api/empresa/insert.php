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

if($dados = json_decode(file_get_contents("php://input"))){

  if(!empty($dados->pessoa)){$empresa->pessoa = $dados->pessoa;}
    else{
          // set response code - 400 bad request
        http_response_code(400);
         // tell the user
        echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
      }
  if(!empty($dados->contribuinte)){$empresa->contribuinte = $dados->contribuinte;}
  if(!empty($dados->cadastro)){$empresa->cadastro = $dados->cadastro;}
  if(!empty($dados->cnpj)){$empresa->cnpj = $dados->cnpj;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->estado)){$empresa->estado = $dados->estado;} // vazio
  if(!empty($dados->estadual)){$empresa->estadual = $dados->estadual;} // vazio
  if(!empty($dados->municipal)){$empresa->municipal = $dados->municipal;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->razao)){$empresa->razao = $dados->razao;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->fantasia)){$empresa->fantasia = $dados->fantasia;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->telefone)){$empresa->telefone = $dados->telefone;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->telefoneSecundario)){$empresa->telefoneSecundario = $dados->telefoneSecundario;} // vazio
  if(!empty($dados->email)){$empresa->email = $dados->email;} // vazio
  if(!empty($dados->cep)){$empresa->cep = $dados->cep;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->logradouro)){$empresa->logradouro = $dados->logradouro;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->numero)){$empresa->numero = $dados->numero;} // observacao
      else{
          $empresa->numero = "SN";
        }
  if(!empty($dados->complemento)){$empresa->complemento = $dados->complemento;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->bairro)){$empresa->bairro = $dados->bairro;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->cidade)){$empresa->cidade = $dados->cidade;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->pais)){$empresa->pais = $dados->pais;}
      else{
            // set response code - 400 bad request
          http_response_code(400);
           // tell the user
          echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));
          die;
        }
  if(!empty($dados->observacao)){$empresa->observacao = $dados->observacao;} // vazio


  // Criando a empresa na base de dados
  if($empresa->create()){
       // set resposta com codigo 201 criado
      http_response_code(201);

      if(($empresa->estado == "Goiás") && ($empresa->cadastro == "Variante")) { echo json_encode(array("message" => "Empresa Cadastrado com sucesso.", "informa" => "Mandar equipe em Campo."));}
      if(($empresa->estado == "São Paulo") && ($empresa->cadastro == "Variante")&& ($empresa->pessoa == "Pessoa Fisica")) { echo json_encode(array("message" => "Empresa Cadastrado com sucesso.", "informa" => "Reavaliar em 2 meses."));}
      if(($empresa->estado == "Ceará") && ($empresa->cadastro == "Variante")&& ($empresa->pessoa == "Pessoa Fisica")&& ($empresa->observacao != "")) { echo json_encode(array("message" => "Empresa Cadastrado com sucesso.", "informa" => "Possivel violação do tratado Beta."));}
      if(($empresa->estado == "Tocantins") && ($empresa->cadastro == "Variante")&& ($empresa->pessoa == "Pessoa Fisica")&& ($empresa->observacao != "")) { echo json_encode(array("message" => "Empresa Cadastrado com sucesso.", "informa" => "Possivel violação do tratado Celta."));}
      if(($empresa->estado == "Amazonas") && ($empresa->cadastro == "Variante")&& ($empresa->pessoa == "Pessoa Fisica")&& ($empresa->observacao != "")) { echo json_encode(array("message" => "Empresa Cadastrado com sucesso.", "informa" => "Possivel violação do tratado Alpha."));}
      if(($empresa->estado != "Goiás") && ($empresa->estado != "São Paulo") && ($empresa->estado != "Ceará") && ($empresa->estado != "Tocantins") && ($empresa->estado != "Amazonas"))
        { echo json_encode(array("message" => "Empresa Cadastrado com sucesso."));}

  }else{

      // set response code - 503 service unavailable
      http_response_code(503);

      // tell the user
      echo json_encode(array("message" => "Incapaz de cadatrar empresa."));
  }

 }else{
  // set response code - 400 bad request
  http_response_code(400);

  // tell the user
  echo json_encode(array("message" => "Incapaz de cadastrar empresa. Os dados estão incompletos."));

}

?>
