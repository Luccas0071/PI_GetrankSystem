<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getrank Sistem</title>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>

    <input type="checkbox" id="check">

    <header>
    
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>

    <div class="left_area">
        <h3>Getrank <span>System</span></h3>
    </div>
    <div class="right_area">
        <a href="#" class="logout_btn">Sair</a>
    </div>
    </header>

    <div class="sidebar">
        <center>
            <img src="pessoa.png" class="profile_image" alt="">
            <h4>Nome Qualquer</h4>
        </center>
        <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fas fa-shopping-basket"></i><span>Pedidos</span></a>
        <a href="#"><i class="fas fa-box-open"></i><span>Produtos</span></a>
        <a href="#"><i class="fas fa-user-friends"></i><span>Clientes</span></a>
        <a href="#"><i class="fas fa-truck"></i><span>Veiculos</span></a>   
    </div>

    <div class="content">
        <div class="row">
            <div class="col m10">
                <br><br><br>
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
                <a href="cadastro_clientes.php" class="btn">Adicionar Cliente</a>
            </div>
        </div>
    </div>
</body>
</html>