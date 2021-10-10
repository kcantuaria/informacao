<?php
//    echo "<pre>"; print_r($_POST); exit;
      @$id = $_POST["id"];
    //  @$cnpj = $_POST["CNPJ"];
     //   echo "<pre>"; print_r($_POST); // exit;

    $url = "http://localhost/informacao/api/empresa/delete.php";
    $data = json_encode(array(
          'id' => $id,
      //    'cnpj' => $cnpj,
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


   echo '<meta http-equiv="refresh" content="0; URL=http://localhost/informacao/index.php?pag=listar&msn='.base64_encode($resultado['message']).'">';
