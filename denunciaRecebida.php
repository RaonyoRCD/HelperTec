
<?php

session_start();



echo '<html lang="en">
<head>
<link rel="icon" 
      type="image/png" 
      href="fotos/ícone.png">
	  
<title>Perfil HelperTec</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$(html,body).animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner-1">
		<div class="w3-header-bottom">
		<div class="container">
			<div class="w3layouts-logo">
				<h1>
					<a href="index.html">HelperTec </a>
				</h1>
			</div>
			<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="first-list"><a href="indexpessoal.php">Página Inicial</a></li>
									<li><a href="perfilpessoal.php">'.$_SESSION["nome"].'</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle hvr-sweep-to-right" data-hover="Pages" data-toggle="dropdown">Denúncias <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a class="active" href="areadedenuncia.php">Denunciar</a></li>
											<li><a href="consulta.php">Consultar Denúncias</a></li>
										</ul>
									</li>
									<li><a href="logout.php">Sair</a></li>
									

									
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>
			<div class="agileinfo-social-grids">
				<ul>
					<li><a href="https://www.facebook.com/Definir-111116794904391/"><i class="fa fa-facebook"></i></a></li>
					
					
				</ul>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	
		<div class="contact">
		<div class="container">
			<h2 class="heading-agileinfo">Denúncia<span>HelperTec - Denúncia Online</span></h2>
			<div class="w3layouts_mail_grids">
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="footer-grids1f2">
						<h3>E-mail</h3>
						<p>helper.suporte@hotmail.com</p>
					</div>	
				</div>
				<div class="col-md-8 w3layouts_mail_grid_right">
				
				<font color="red"><h1>Sua denúncia foi enviada com sucesso!!!</h1></font><br><br>
					<form action="recebeDenuncia.php" method="post" enctype="multipart/form-data">
						
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="file" name="imagem" required="">
							<br><br><br>
						</div>
						<div class="clearfix"> </div>
						<textarea name="descricao" placeholder="Descrição..." required=""></textarea>
						<input type="submit" value="Enviar">
						<input type="reset" value="Limpar">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	


<!-- footer -->







	
	
	
	
	
	

		<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>Sobre nosso site</h4>
					<p>Este site foi desenvolvido por alunos da <a href="https://univesp.br">Univesp</a>, com a finalidade de projetar uma aplicação voltada para a matéria de Projeto Integrador II.<span>O mesmo fora desenvolvido sem nenhum fim lucrativo.</span></p>
				</div>
				
				<div class="col-md-2 agile-footer-grid">
					<h4>Linhas do (REEE)</h4>
					<ul>
						<li>Linha Verde</li>
						<li>Linha Marrom</li>
						<li>Linha Azul</li>
						<li>Linha Branca</li>
					</ul>
				</div>
				
				
				<div class="col-md-2 agile-footer-grid" align="right">
					<h4>Navegação</h4>
					<ul>
					<li class="text"><a href="indexpessoal.php">Página Inicial</a></li>
						<li class="text"><a href="perfilpessoal.php">'.$_SESSION["nome"].'</a></li>
						<li class="text"><a href="areadedenuncia.php">Denuncia</a></li>
						<li class="text"><a href="suportepessoal.php">Suporte</a></li>
						<li class="text"><a href="logout.php">Sair</a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->

<!-- footer -->
<div class="copy-right">
	<div class="container">
			<p> &copy; 2022 HelperTec. Todos os direitos reservados.
	</div>
</div>
<!-- //footer -->
<!--Start-slider-script-->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
				
			$().UItoTop({ easingType: easeOutQuart });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>';
?>