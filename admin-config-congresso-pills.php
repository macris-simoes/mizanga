<div class="mt-3 container">

  <!-- Início do menu das tabs ATENÇÃO: os IDs do menu e do conteúdo tem que ser iguais-->

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="congresso-tab" data-toggle="tab" href="#congresso" role="tab" aria-controls="congresso" aria-selected="true">Configurar congresso</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Configurar inscritos</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" id="trabalho-tab" data-toggle="tab" href="#trabalho" role="tab" aria-controls="trabalho" aria-selected="false"> Configurar trabalhos</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" id="parecerista-tab" data-toggle="tab" href="#parecerista" role="tab" aria-controls="parecerista" aria-selected="false"> Configurar pareceristas</a>
    </li>
  </ul>



  <!-- início do conteúdo das tabs ATENÇÃO: os IDs do menu e do conteúdo tem que ser iguais -->

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="congresso" role="tabpanel" aria-labelledby="congresso-tab">
      <?php require('admin-config-congresso.php'); ?>
    </div>



    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <?php require('admin-config-inscrito.php'); ?>
    </div>


    <div class="tab-pane fade" id="trabalho" role="tabpanel" aria-labelledby="trabalho-tab">
      <?php require('admin-config-trabalho.php'); ?>
    </div>

    <div class="tab-pane fade" id="parecerista" role="tabpanel" aria-labelledby="parecerista-tab">
      <?php require('admin-config-parecerista.php'); ?>
    </div>
  </div>



</div>