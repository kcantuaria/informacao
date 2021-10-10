<?php

   $url = "http://localhost/informacao/api/empresa/read.php";
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
   $resultado = json_decode(curl_exec($ch));

  ?>
  <?php
   if(isset($_GET["msn"])){
    echo '
    <div class="row mt-4" id="msn">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>'.base64_decode($_GET["msn"]).'</strong><br/>
        <a href="index.php?pag=listar" class="btn-close"></a>
      </div>
    </div> ';
  }

    if(isset($_GET["info"])){
     echo '
     <div class="alert mt-4 alert-primary d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
          <strong>'.base64_decode($_GET["info"]).'</strong>
        </div>
    </div>';

  } ?>
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
    <?php
     foreach ($resultado->Empresa as $empresa) {
       echo '
       <tr>
         <th scope="row">'.$empresa->id.'</th>
         <td>'. @$empresa->cnpj .'</td>
         <td>'. @$empresa->razao .'</td>
         <td>'. @$empresa->estado .'</td>
         <td>
            <a href="index.php?pag=pesquisar&id='.$empresa->id.'" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
               <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg> ver
            </a>
            <a href="index.php?pag=editar&id='.$empresa->id.'" class="btn btn-info">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
              </svg> Editar
            </a>
            <a href="index.php?pag=delete&id='.$empresa->id.'" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete'.$empresa->id.'">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg> Excluir
            </a>
            <!-- Modal -->
            <div class="modal fade" id="delete'.$empresa->id.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header bg-danger">
                    <h5 class="modal-title" id="staticBackdropLabel"><font color="FFFFFF">Deletendo Registro</font></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" align="center">
                    <strong>Você deseja deletar o item de id '.$empresa->id.'</strong>
                  </div>
                  <div class="modal-footer">
                  <form action="app/funcoes/delete.php" method="post">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                    <button type="submit" class="btn btn-success">Deletar</button>
                    <input type="hidden" name="id" value="'.$empresa->id.'"/>
                  </form>
                  </div>
                </div>
              </div>
            </div>

         </td>
       </tr>

       ';
     }


    ?>





  </tbody>
</table>
