<?php
//    echo "<pre>"; print_r($_POST); exit;
      @$id = $_POST["id"];
      @$pessoa = $_POST["pessoa"];
      @$contribuinte = $_POST["contribuinte"];
      @$cadastro = $_POST["cadastro"];
      @$cnpj = $_POST["CNPJ"];
      @$estado = $_POST["estado"];
      @$estadual = $_POST["inscricaoEstadual"];
      @$municipal = $_POST["inscricaoMunicipal"];
      @$razao = $_POST["razao"];
      @$fantasia = $_POST["fantasia"];
      @$telefone = $_POST["telefone"];
      @$telefoneSecundario = $_POST["telefoneSecundario"];
      @$email = $_POST["email"];
      @$cep = $_POST["cep"];
      @$logradouro = $_POST["logradouro"];
      @$numero =  $_POST["numero"];
      @$complemento = $_POST["complemento"];
      @$bairro = $_POST["bairro"];
      @$cidade = $_POST["cidade"];
      @$pais = $_POST["pais"];
      @$observacao = $_POST["informacao"];

    //   echo "<pre>"; print_r($_POST); // exit;

    $url = "http://localhost/informacao/api/empresa/update.php";
    $data = json_encode(array(

          'id' => $id,
          'pessoa' => $pessoa,
          'contribuinte' => $contribuinte,
          'cadastro' => $cadastro,
          'cnpj' => $cnpj,
          'estado' => $estado,
          'estadual' => $estadual,
          'municipal' => $municipal,
          'razao' => $razao,
          'fantasia' => $fantasia,
          'telefone' => $telefone,
          'telefoneSecundario' => $telefoneSecundario,
          'email' => $email,
          'cep' => $cep,
          'logradouro' => $logradouro,
          'numero' => $numero,
          'complemento' => $complemento,
          'bairro' => $bairro,
          'cidade' => $cidade,
          'pais' => $pais,
          'observacao' => $observacao
    ));

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $output = curl_exec($ch);
    curl_close($ch);
    $resultado = json_decode($output,true);
  //  echo $resultado['message'];
  //  var_dump($output);


   echo '<meta http-equiv="refresh" content="0; URL=http://localhost/informacao/index.php?pag=editar&id='.$id.'&msn='.base64_encode($resultado['message']).'">';
