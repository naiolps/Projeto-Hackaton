<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Auxilium</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="imag/logo1 (1).png"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#home"></a></li>
        <li><a href="index.php">Sair</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#home"></a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="row center">
    <h5 class="header col s12 light">Etec Adolpho Berezin</h5>
  </div>
  <div id="index-banner" class="parallax-container" >
    <div class="section no-pad-bot">
      <div class="container">
      <div class="row center">
    <h2 class="header col s12 light">Etec Adolpho Berezin</h2>
  </div>
      </div>
    </div>
    <div class="parallax"><img src="imag\2aula.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <div class="header">
  <div class="row">
      <p><b>Endereço:</b>Av. Monteiro Lobato, 8000 - Balneário Itaóca, Mongaguá - SP, 11730-000</p>
    </div>
    <div class="row">
      <p><b>Telefone:</b> (13) 3448-3800</p>
    </div>
    <div class="row">
      <p><b>Descrição:</b> A escola iniciou seu funcionamento em 1995 sendo vinculada ao Centro Paula Souza e à Secretaria de Ciência, Tecnologia, Desenvolvimento Econômico e Turismo, o qual estabeleceu convênio de cooperação técnico-educacional com a Prefeitura de Mongaguá. A escola congrega alunos provenientes dos municípios de Mongaguá, Praia Grande, Itanhaém, Peruíbe, Pedro de Toledo, Itariri, Juquiá e São Vicente</p>
    </div>
  </div>
  <center>
    <div class="row">
      <form class="col s12" name="Formulário" method="post" > 
   <h3>Eventos</h3><br>
   <div class="col">
				<?php
					$arquivo = fopen("cadastro/clientes.txt", "r") or die("Não foi possível abrir o arquivo");
					echo nl2br(fread($arquivo,filesize("cadastro/clientes.txt")));
					fclose($arquivo);
				?>
			</div>
  
           </fieldset><br><br>
      <button type="button" class="btn-large waves-effect waves-light teal lighten-1" onclick="window.open(document.referrer,'_self')">Sair</button><br>
  
       </fieldset>
     </form>
</div>
  
  


  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  

</body>
</html>