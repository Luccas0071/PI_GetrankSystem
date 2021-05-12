<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet"  href="css/telaLogin.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body{
        padding-left:  130%;
        background-color: #1DC4E7;
    }
  </style>
</head>

<body ng-app="mainModule" ng-controller="mainController">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form">
        <div class="row">
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>
            <input class="validate" id="email" type="email">
            <label for="email" data-error="wrong" data-success="right">E-mail</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password">
            <label for="password">Senha</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <a href="principal.php" class="btn waves-effect waves-light col s12">Acessar</a>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="cadastro_usuarios.php">Cadastre-se</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>
    var app = angular.module('mainModule', []);

    app.controller('mainController', function($scope, $http) { //o scope liga o js e o template
      $scope.nome = 'Valor Inicial';
      //$http.get().success();
      $scope.reset = function() {
        $scope.nome = '';
      }
    });
  </script>

</body>

</html>