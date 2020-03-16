<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Malharia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estlilo.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




</head>
<body>

	<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top border-0 menu" id="navbara">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img class="t-img" src="img/logo.png" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link"  href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Sobre">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#servicos">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contato">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/1.jpg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/3.jpg" alt="Terceiro Slide">
    </div>
  </div>
</div><!-- fim do menu -->
<section id="biografia">
	<div class="row">
		<div class="col-md-9 mt-4">
			<h1 id="Sobre">Biografia Malharia</h1>
			<p>Malharia Lizete Varella é fortalecida por uma história de crescimento pessoal e profissional, a natureza à busca pela felicidade e atender seus clientes com as melhores marcas mundial em satisfação e com muita elegância: tamanhos P até Plus, inclusive linha infantil e juvenil licenciados, lingeries, acessórios entre outros.</p>
			
		</div>

		<div class="col-md-3 mt-5">
			<img src="img/index-1.jpg">

			
		</div>
		
	</div>
	
</section>


<section id="moda" class="mt-5">
	<div class="row">
		<div class="col-md-4">
			<h4 id="servicos">MODA PLUS SIZE</h4><br><br>
			
			<img src="img/servico02.jpg">


			
		</div>


		<div class="col-md-4">
			<h4>MODA FEMININA</h4><br><br>
			<img src="img/servico03.jpg">

			
		</div>

		<div class="col-md-4">
			<h4>MODA MASCULINA</h4><br><br>
			<img src="img/servico01.jpg">

			
		</div>


		
	</div>
</section>


<section id="moda" class="mt-5">
	<div class="row">
		<div class="col-md-4">
			<h4>MODA INFANTIL</h4><br><br>
			<div class="divisor"></div>
			<img src="img/servico04.jpg">

			
		</div>


		<div class="col-md-4">
			<h4>LINGERIES</h4><br><br>
			<img class="slide-image" src="img/servico05.jpg">
			<div class="over">
				
			</div>

			
		</div>

		<div class="col-md-4">
			<h4>ACESSÓRIOS</h4><br><br>
			<img src="img/servico06.jpg">

			
		</div>


		
	</div>
</section>

<div class="mt-5" id="form">
	<h1 id="contato">Entre em Contato</h1>
			<form method="POST" action="enviaContato.php">
				<label>Digite seu nome:
					<input type="text" name="nome" value="" placeholder="ex: João" >
				</label>
				<label>Digite seu e-mail:
					<input type="email" name="email" value="" placeholder="ex: joaoclb@gmail.com" >
				</label>
				<label>Digite o assunto:
					<input type="text" name="assunto" value="" placeholder="ex: orçamento" >
				</label>
				<label>Digite sua mensagem:
					<input type="text" name="msg" value="" placeholder="Digite sua mensagem aqui" >
				</label>
				
				<!-- Div do ReCaptcha foi adicionado no final do formulário -->
				<div class="g-recaptcha" data-sitekey="|*SEU-SITE-KEY*|"></div>
				
				<input class="send" type="submit" name="enviar">
			</form><br><br><br><br>

	
	
</div>


	
</div>

<footer class="mt-5">
	<div class="row">
		<div class="col-md-4">
			<a href="index.php"><img src="img/logo.png"></a>
		</div>
		
	

	<div class="col-md-4">
		<h4>Link úteis</h4>
		<ul >
			<li><a  href="index.php">Home</li>
			<li><a  href="#Sobre">Sobre</li>
			<li><a  href="#servicos">Serviço</li>
			<li><a  href="#contato">Contato</li>
		</ul>
		 
	</div>

	
	</div>

	
	

</footer>

<script src="jquery.js"></script>
<script src="app.js"></script>

<script type="text/javascript">
	
</script>




</body>
</html>