
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<?php // include_once('app/teste.php');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?pag=cadastrar">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pag=listar">Listar</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="index.php?pag=pesquisar">Pesquisar</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<?php

  if(@$_GET["pag"] == 'cadastrar'){
    include_once("app/telas/cadastrar.php");
  }
  if(@$_GET["pag"] == 'listar'){
    include_once("app/telas/listar.php");
  }
  if(@$_GET["pag"] == 'pesquisar'){
    include_once("app/telas/pesquisar.php");
  }
  if(@$_GET["pag"] == 'editar'){
    include_once("app/telas/editar.php");
  }

 ?>
</div>
