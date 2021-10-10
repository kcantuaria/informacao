<?php

   $url = "http://localhost/informacao/api/empresa/read.php";
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
   $resultado = json_decode(curl_exec($ch));

?>

<div class="row mt-3">
<strong>Listando Empresas</strong>
</div>
<table class="table mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Razão Social</th>
      <th scope="col">Estado</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>

  </tbody>
</table>

<?php
 foreach ($resultado->Empresa as $empresa) {
    //  var_dump($empresa);
      echo "Razão: " . $empresa->razao . "<br>";
      echo "Fantasia: " . $empresa->fantasia . "<br>";



      echo "<hr>";
   }


?>
