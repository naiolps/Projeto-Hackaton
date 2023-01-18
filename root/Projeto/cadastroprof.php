<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Auxilium-cadastro-professor</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Android 5 Chrome Color -->
  <meta name="theme-color" content="#EE6E73">
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
</head>
  <body>
    <?php
    session_start();

    ?>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="imag/logo1 (1).png"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#home"></a></li>
        <li></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#home"></a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <center>
    <div class="row">
      <form class="col s12" name="Formulário" method="post" > 
   <h3>Cadastro do professor</h3><br>
    
     <fieldset style="width:500px">
       <legend>Dados Pessoais</legend>

       NOME:
       <br><input type="text" name="name"> <br>
       SOBRENOME:
       <br><input type="text" name="sobrenome"> <br>
       RG:
       <br><input type="text" name="rg"> <br>
       CPF:
       <br><input type="text" name="cpf"> <br>
       ENDEREÇO:
       <br><input type="text" name="endereco"> <br>
       TELEFONE:
       <br><input type="text" name="telefone"> <br>
       Senha:
       <br><input type="password" name="senha"> <br>
       
       

       <fieldset style="width:500px">
         <legend>matéria </legend>

        
        MATÉRIA A LECIONAR:
         <br><select name="categoria">
           <option>Matemática</option>
           <option>Português</option>
           <option>Geografia</option>
           <option>Inglês</option>
           <option>História</option>
           <option>Física</option>>
           <option>Ciências</option></select><br><br>
         
           </fieldset><br><br>

      <br><button type="submit" class="btn-large waves-effect waves-light teal lighten-1" onclick="location.href='login.php'" >cadastrar</button><br>
      <br><button type="button" class="btn-large waves-effect waves-light teal lighten-1" onclick="location.href='index.php'" >Sair</button><br>
  
       </fieldset>
     </form>
</div>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
<!--     <script src="js/velocity.min.js"></script>-->
<!--  <script src="js/leanModal.js"></script>-->

  <script>
    $(document).ready(function(){
        $('select').formSelect();
    });
  </script>

  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $sobrenome = $_POST['sobrenome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $tel = $_POST['telefone'];
    $senha = $_POST['senha'];
    $categoria = $_POST['categoria'];
    if (empty($name)) {
        echo "o formulario não foi prenchido";
    } elseif (empty($sobrenome)){
      echo "o formulario não foi prenchido";
    }
    elseif (empty($rg)){
      echo "o formulario não foi prenchido";
    }
    elseif (empty($cpf)){
      echo "o formulario não foi prenchido";
    }
    elseif (empty($endereco)){
      echo "o formulario não foi prenchido";
    }
    elseif (empty($tel)){
      echo "o formulario não foi prenchido";
    }
    elseif (empty($senha)){
      echo "o formulario não foi prenchido";
    }
    elseif (empty($categoria)){
      echo "o formulario não foi prenchido";
    }else {
      header("Location: login.php");
      
    }
}

  ?>
    
</body>
</html>