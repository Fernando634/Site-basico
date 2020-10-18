<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/template.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/home.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/contato.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/sobre.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/produtos.css" />
		<title>Confeitaria do Yuri</title>
	</head>
	<body onload="slide1()">
		
		<div id="header">
			<div class="header_int">
				<div class="header_left"><img src="<?php echo BASE_URL;?>assets/images/logo.png"></div>
				<div class="header_right">
					<ul>
						<a href="<?php echo BASE_URL;?>home"><li>Home</li></a>
						<a href="<?php echo BASE_URL;?>produtos"><li>Produtos</li></a>
						<a href="<?php echo BASE_URL;?>sobre"><li>Sobre</li></a>
						<a href="<?php echo BASE_URL;?>contato"><li>Contato</li></a>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			
			<?php $this->loadViewInTemplate($viewname);?>

		</div>
		<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/slider.js"></script>
	</body>
	<div id="footer">rodape</div>
</html>