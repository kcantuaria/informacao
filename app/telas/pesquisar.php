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
   <form class="" action="index.php" method="post">
   <div class="row">
     <div class="col-6">
       <div class="row">
         <div class="col-4">
           Tipo de Pessoa
           <select class="form-select" aria-label="Default select example">
             <option value="<?php echo $resultado['pessoa'] ?>" selected="selected"> <?php echo $resultado['pessoa'] ?> </option>
             <option value="Pessoa Fisica">Pessoa Fisica</option>
             <option value="Pessoa Jurídica">Pessoa Jurídica</option>
           </select>
         </div>
         <div class="col-4">
           Tipo de Contribuinte
           <select class="form-select" aria-label="Default select example">
             <option value="<?php echo $resultado['contribuinte'] ?>" selected="selected"><?php echo $resultado['contribuinte'] ?></option>
             <option value="Contribuinte">Contribuinte</option>
             <option value="Não Contribuinte">Não Contribuinte</option>
           </select>
         </div>
         <div class="col-4">
           Tipo de Cadastro
           <select class="form-select" aria-label="Default select example">
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
           <select class="form-select" aria-label="Default select example">
             <option value="<?php echo $resultado['estado'] ?>" selected><?php echo $resultado['estado'] ?></option>
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
       <input type="text" name="fantasia" class="form-control" value="<?php echo $resultado['numero'] ?>">
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
   <a href="index.php?pag=cadastrar" class="btn btn-secondary">Cadastrar Novo</a>
   <a href="index.php?pag=listar"  class="btn btn-danger">sair </a>
   </div>
 </div>
 </form>
