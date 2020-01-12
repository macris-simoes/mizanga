<!DOCTYPE html>
<html lang="pt-BR">

<?php require('./includes/head.php'); ?>

<body>
  <div>
    <?php require('./includes/navbar.php'); ?>
  </div>    
<div> 
<form class="form-inline flex-row-reverse">
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Perfil</label>
</div>
<div>
<div class="container">
    <div class="mb-1 pt-1">
      <h4 class="display-3">Enviar Trabalho para outro avaliador</h4>
      <p class="lead font-italic"></p>
    </div>

</div>
<!-- Inicio -->
<div class="container">
    <p>Avaliador de destino</p>
<div class="w-25 input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submeter</button>
  </div>
</div>
</div>
<div class="container">
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">TRABALHOS QUE SERÃO ENVIADOS</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>


</body>
</html>