<?php
//conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Mensagem
include_once 'includes/menssagem.php';
?>


<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Cliente</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome:</th>
          <th>Endereço:</th>
          <th>Telefone:</th>
          <th>CNPJ/CPF:</th>
        </tr>
      </thead>
      <tbody>

        <?php
          $sql = "SELECT * FROM clientes";
          $resultado = mysqli_query($connect, $sql);

          if(mysqli_num_rows($resultado) > 0):
          while($dados = mysqli_fetch_array($resultado)):
        ?>

        
        <tr>
          <td><?php echo $dados['nome']; ?></td>
          <td><?php echo $dados['endereco']; ?></td>
          <td><?php echo $dados['telefone']; ?></td>
          <td><?php echo $dados['numeroNascional']; ?></td>
          <td><a href="editar_clientes.php?id=<?php echo $dados['id']; ?> " class="btn-floating orange"><i class="material-icons">edit</i></a></td>

          <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>


          <!-- Modal Structure -->
          <div id="modal<?php echo $dados['id']; ?>" class="modal">
            <div class="modal-content">
              <h4>Atenção !</h4>
              <p>Tem certeza que deseja escluir esse cliente ?</p>
            </div>
            <div class="modal-footer">
              <form action="php_action/delete.php" method="POST">
                <input type="hidden"  name="id" value="<?php echo $dados['id']; ?>">
                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar !</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
              </form>
            </div>
          </div>
        </tr>

        <?php 
          endwhile; 
          else: 
        ?>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <?php
          endif;
        ?>

      </tbody>
    </table>
    <br>
    <a href="cadastro_clientes.php" class="btn">Adicionar Cliente</a>
  </div>
</div>

<?php
include_once 'includes/footer.php';
?>
