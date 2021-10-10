
  <div class="row bg-light mt-4">
    <strong>Informações</strong>
  </div>
  <form class="" action="app/funcoes/insert.php" method="post">
  <div class="row">
    <div class="col-6">
      <div class="row">
        <div class="col-4">
          Tipo de Pessoa
          <select class="form-select" name="pessoa" aria-label="Default select example">
            <option value="Pessoa Fisica">Pessoa Fisica</option>
            <option value="Pessoa Jurídica">Pessoa Jurídica</option>
          </select>
        </div>
        <div class="col-4">
          Tipo de Contribuinte
          <select class="form-select" name="contribuinte" aria-label="Default select example">
            <option value="Contribuinte">Contribuinte</option>
            <option value="Não Contribuinte">Não Contribuinte</option>
          </select>
        </div>
        <div class="col-4">
          Tipo de Cadastro
          <select class="form-select" name="cadastro" aria-label="Default select example">
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
      <input type="CNPJ" name="CNPJ" class="form-control">
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-4">
          Estado
          <select class="form-select"name="estado" aria-label="Default select example">
            <option selected>Selecione o Estado Brasileiro</option>
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Distrito">Distrito Federal</option>
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
          <input type="text" class="form-control" name="inscricaoEstadual" value="">
        </div>
        <div class="col-4">
          Incricão Municipal
          <input type="text" class="form-control" name="inscricaoMunicipal" value="">
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      Razão Social
      <input type="text" name="razao" class="form-control">
    </div>
    <div class="col-6">
      Nome Fantasial
      <input type="text" name="fantasia" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="col-3">
      Telefone Principal
      <input type="text" name="telefone" class="form-control">
    </div>
    <div class="col-3">
      Telefone Secundario
      <input type="text" name="telefoneSecundario" class="form-control">
    </div>
    <div class="col-6">
      E-mail
      <input type="text" name="email" class="form-control">
    </div>
  </div>

  <div class="row mt-3 bg-light">
    <strong>Endereço</strong>
  </div>

  <div class="row">
    <div class="col-2">
      CEP
      <input type="text" name="cep" class="form-control">
    </div>
    <div class="col-4">
      Logradouro*
      <input type="text" name="logradouro" class="form-control">
    </div>
    <div class="col-2">
      Número
      <input type="text" name="numero" class="form-control">
    </div>
    <div class="col-4">
      Complemento
      <input type="text" name="complemento" class="form-control">
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      Bairro*
      <input type="text" name="bairro" class="form-control">
    </div>
    <div class="col-4">
      Cidade*
      <input type="text" name="cidade" class="form-control">
    </div>
    <div class="col-4">
      Pais
      <select class="form-select" name="pais" aria-label="Default select example">
        <option value="Brasil">Brasil</option>
      </select>
    </div>
 </div>

 <div class="row">
   <div class="col-12">
     Observação
      <textarea name="informacao" rows="2" class="form-control" cols="80"></textarea>
   </div>
</div>

<div class="row mt-2">
  <div class="col-12" align="right">
  <a href="index.php?pag=listar" class="btn btn-danger">Sair</a>
  <button type="submit" name="button" class="btn btn-success">Cadastrar </button>
  </div>
</div>
</form>
