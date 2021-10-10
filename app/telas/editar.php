<?php

   $url = "http://localhost/informacao/api/empresa/read_one.php?id=$_GET[id]";
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "post");
   $resultado = (array) json_decode(curl_exec($ch), true);

 ?>

   <div class="row bg-light mt-4">
     <strong>Informações</strong>
   </div>
   <?php
    if(isset($_GET["msn"])){
     echo '
     <div class="row mt-4" id="msn">
       <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>'.base64_decode($_GET["msn"]).'</strong>
         <a href="index.php?pag=listar" class="btn-close"></a>
       </div>
     </div> ';

   } ?>
   <form class="" action="app/funcoes/update.php" method="post">
   <div class="row">
     <div class="col-6">
       <div class="row">
         <div class="col-4">
           Tipo de Pessoa
           <select class="form-select" name="pessoa" aria-label="Default select example">
             <option value="<?php echo $resultado['pessoa'] ?>" selected="selected"> <?php echo $resultado['pessoa'] ?> </option>
             <option value="Pessoa Fisica">Pessoa Fisica</option>
             <option value="Pessoa Jurídica">Pessoa Jurídica</option>
           </select>
         </div>
         <div class="col-4">
           Tipo de Contribuinte
           <select class="form-select" name="contribuinte" aria-label="Default select example">
             <option value="<?php echo $resultado['contribuinte'] ?>" selected="selected"><?php echo $resultado['contribuinte'] ?></option>
             <option value="Contribuinte">Contribuinte</option>
             <option value="Não Contribuinte">Não Contribuinte</option>
           </select>
         </div>
         <div class="col-4">
           Tipo de Cadastro
           <select class="form-select" name="cadastro" aria-label="Default select example">
             <option value="<?php echo $resultado['cadastro'] ?>"><?php echo $resultado['cadastro'] ?></option>
             <option value="Real">Real</option>
             <option value="Variante">Variante</option>
             <option value="Indeterminado">Indeterminado</option>
           </select>
         </div>
        </div>
     </div>
     <div class="col-6"></div>
   </div>

   <div class="row">
     <div class="col-6">
       CNPJ
       <input type="CNPJ" name="CNPJ" class="form-control" value="<?php echo $resultado['cnpj'] ?>">
     </div>
     <div class="col-6">
       <div class="row">
         <div class="col-4">
           Estado
           <select class="form-select" name="estado" aria-label="Default select example">
             <option value="<?php echo $resultado['estado'] ?>" selected><?php echo $resultado['estado'] ?></option>
             <option value="Acre">Acre</option>
             <option value="Alagoas">Alagoas</option>
             <option value="Alagoas">Alagoas</option>
             <option value="Amazonas">Amazonas</option>
             <option value="Bahia">Bahia</option>
             <option value="Ceará">Ceará</option>
             <option value="Distrito Federal">Distrito Federal</option>
             <option value="Espírito Santo">Espírito Santo</option>
             <option value="Goiás">Goiás</option>
             <option value="Maranhão">Maranhão</option>
             <option value="Mato Grosso">Mato Grosso</option>
             <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
             <option value="Minas Gerais">Minas Gerais</option>
             <option value="Pará">Pará</option>
             <option value="Paraíba">Paraíba</option>
             <option value="Paraná">Paraná</option>
             <option value="Pernambuco">Pernambuco</option>
             <option value="Piauí">Piauí</option>
             <option value="Rio de Janeiro">Rio de Janeiro</option>
             <option value="Rio Grande do Norte">Rio Grande do Norte</option>
             <option value="Rio Grande do Sul">Rio Grande do Sul</option>
             <option value="Rondônia">Rondônia</option>
             <option value="Roraima">Roraima</option>
             <option value="Santa Catarina">Santa Catarina</option>
             <option value="São Paulo">São Paulo</option>
             <option value="Sergipe">Sergipe</option>
             <option value="Tocantins">Tocantins</option>
           </select>
         </div>
         <div class="col-4">
           Incricão Estadual
           <input type="text" class="form-control" name="inscricaoEstadual" value="<?php echo $resultado['estadual'] ?>">
         </div>
         <div class="col-4">
           Incricão Municipal
           <input type="text" class="form-control" name="inscricaoMunicipal" value="<?php echo $resultado['municipal'] ?>">
         </div>
       </div>
     </div>
   </div>

   <div class="row">
     <div class="col-6">
       Razão Social
       <input type="text" name="razao" class="form-control" value="<?php echo $resultado['razao'] ?>">
     </div>
     <div class="col-6">
       Nome Fantasial
       <input type="text" name="fantasia" class="form-control" value="<?php echo $resultado['fantasia'] ?>">
     </div>
   </div>

   <div class="row">
     <div class="col-3">
       Telefone Principal
       <input type="text" name="telefone" class="form-control" value="<?php echo $resultado['telefone'] ?>" >
     </div>
     <div class="col-3">
       Telefone Secundario
       <input type="text" name="telefoneSecundario" class="form-control" value="<?php echo $resultado['telefoneSecundario'] ?>">
     </div>
     <div class="col-6">
       E-mail
       <input type="text" name="fantasia" class="form-control" value="<?php echo $resultado['fantasia'] ?>">
     </div>
   </div>

   <div class="row mt-3 bg-light">
     <strong>Endereço</strong>
   </div>

   <div class="row">
     <div class="col-2">
       CEP
       <input type="text" name="cep" class="form-control" value="<?php echo $resultado['cep'] ?>">
     </div>
     <div class="col-4">
       Logradouro*
       <input type="text" name="logradouro" class="form-control" value="<?php echo $resultado['logradouro'] ?>">
     </div>
     <div class="col-2">
       Número
       <input type="text" name="fantasia" class="form-control" value="<?php echo $resultado['fantasia'] ?>">
     </div>
     <div class="col-4">
       Complemento
       <input type="text" name="complemento" class="form-control" value="<?php echo $resultado['complemento'] ?>">
     </div>
   </div>

   <div class="row">
     <div class="col-4">
       Bairro*
       <input type="text" name="bairro" class="form-control" value="<?php echo $resultado['bairro']; ?>">
     </div>
     <div class="col-4">
       Cidade*
       <input type="text" name="cidade" class="form-control" value="<?php echo $resultado['cidade']; ?>">
     </div>
     <div class="col-4">
       Pais
       <select class="form-select" aria-label="Default select example">
         <option value="Brasil">Brasil</option>
       </select>
     </div>
  </div>

  <div class="row">
    <div class="col-12">
      Observação
       <textarea name="informacao" rows="2" class="form-control" cols="80"><?php echo $resultado['observacao'] ?></textarea>
    </div>
 </div>

 <div class="row mt-2">
   <div class="col-12" align="right">
     <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
    <a href="index.php?pag=listar"  class="btn btn-danger">sair </a>
    <button type="submit" href="index.php?pag=cadastrar" class="btn btn-success">Atualizar</button>
   </div>
 </div>
 </form>
