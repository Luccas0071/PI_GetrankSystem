<?php
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Veiculos</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Modelo:</th>
          <th>Placa:</th>
          <th>Categoria de Veiculo:</th>
          <th>Statos:</th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Texte</td>
          <td>Texte texte</td>
          <td>(41) 0000-0000</td>
          <td>000.000.000-00</td>
          <td><a href="#" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
          <td><a href="#" class="btn-floating red"><i class="material-icons">delete</i></a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="cadastro_veiculos.php" class="btn">Adicionar Veiculos</a>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>