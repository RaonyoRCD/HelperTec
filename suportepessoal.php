
<?php

session_start();



echo '<html lang="en">
<head>
<link rel="icon" 
      type="image/png" 
      href="images/hicon.png">
	  
<title>Helper</title>
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
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$("html,body").animate({scrollTop:$(this.hash).offset().top},1000);
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
					<a href="index.html">Helper </a>
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
									<li><a href="denuncia.php">Denuncia</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle hvr-sweep-to-right" data-hover="Pages" data-toggle="dropdown">Perfil <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a class="active" href="suportepessoal.php">Suporte</a></li>
											<li><a href="logout.php">Sair</a></li>
										</ul>
									</li>
									
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>
			<div class="agileinfo-social-grids">
				<ul>
					<li><a href="https://www.facebook.com/Helper-Denúncia-Online-2070322706623352/"><i class="fa fa-facebook"></i></a></li>
					
					
				</ul>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- modal -->
	<!-- <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Travel</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/about2.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>*/
	</div> -->
	<!-- //modal -->
	<!-- contact form  -->
	<div class="contact">
		<div class="container">
			<h2 class="heading-agileinfo">Fale Conosco<span>Helper - Denúncia Online</span></h2>
			<div class="w3layouts_mail_grids">
				<div class="col-md-4 w3layouts_mail_grid_left">
					<div class="footer-grids1f2">
						<h3>E-mail</h3>
						<p>helper.suporte@hotmail.com</p>
					</div>	
				</div>
				<div class="col-md-8 w3layouts_mail_grid_right">
					<form action="#" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Name" placeholder="Nome" required="">
							<input type="email" name="Email" placeholder="E-mail" required="">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Telephone" placeholder="Telefone" required="">
							<input type="text" name="Subject" placeholder="Assunto" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea name="Message" placeholder="Descrição..." required=""></textarea>
						<input type="submit" value="Submit">
						<input type="reset" value="Clear">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //contact form -->
<!-- map -->	
	<!-- <div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
	 </div> -->
<!-- //map -->	
<!--
<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Travel</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/about2.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->

<!-- footer -->







<div class="w3-team" id="models">
	<div class="w3-team-head">
			<h3 class="heading-agileinfo">Our Team<span>Exclusive Holidays for Any Travelers</span></h3>
	</div>
		<div class="container">
			<div class="w3-team-grids">
				<div class="col-md-4 w3-team-grid">
					<img src="images/aqui.jpg" class="img-responsive" alt="img">
					<h3>PEDRO SIQUEIRA</h3>
					<p>Join Agent</p>
					<ul class="team-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
				</div>
				<div class="col-md-4 w3-team-grid">
				<img src="images/wilsin.jpg" class="img-responsive" alt="img">
					<h3>WILSON AGOSTINETE</h3>
					<p>Empresário</p>
					<ul class="team-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
				</div>
				<div class="col-md-4 w3-team-grid">
				<img src="images/gay.jpg" class="img-responsive" alt="img">
					<h3>GUTO DI BIASE</h3>
					<p>Pedófilo</p>
					<ul class="team-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	

	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>Sobre nosso site</h4>
					<p>Esse site foi desenvolvido por alunos do curso Técnico de Informática, da ETEC Arnaldo Pereira Cheregatti para apresentar como Trabalho de Conclusão de Curso. <span> O mesmo sendo desenvolvido sem nenhum fim lucrativo.</span></p>
				</div>
				<!--<div class="col-md-4 agile-footer-grid">
					<h4>Twitter Posts</h4>
					<ul class="w3agile_footer_grid_list">
						<li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
						<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://mail.com</a> ut aut
							voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
					</ul>
				</div>
				<div class="col-md-2 agile-footer-grid">
					<h4>Events</h4>
					<ul>
						<li>12th Feb <a href="#" data-toggle="modal" data-target="#myModal">Curabitur</a></li>
						<li>10th Mar <a href="#" data-toggle="modal" data-target="#myModal">Fusce urna</a></li>
						<li>24th Mar <a href="#" data-toggle="modal" data-target="#myModal">Praesent</a></li>
						<li>17th Apr <a href="#" data-toggle="modal" data-target="#myModal">Malesuada </a></li>
						<li>09th May <a href="#" data-toggle="modal" data-target="#myModal">Cum sociis</a></li>
					</ul>
				</div>-->
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
			<p> &copy; 2018 Helper . Todos direitos reservados | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
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
			/*
				var defaults = {
				containerID: "toTop", // fading element id
				containerHoverID: "toTopHover", // fading element hover id
				scrollSpeed: 1200,
				easingType: "linear" 
				};
			*/
								
			$().UItoTop({ easingType: "easeOutQuart" });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>';
?>