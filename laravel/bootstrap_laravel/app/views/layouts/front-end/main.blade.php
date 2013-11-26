<!DOCTYPE html>
	<html lang="en">
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title></title>
			<link rel="stylesheet" href="<?php echo asset('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
			<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
			<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/style.css') ?>">

			<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    		<script src="<?php echo asset('assets/plugins/bootstrap/js/bootstrap.min.js') ?>" > </script>
	</head>

	<body>
		
		<!-- Menus do site -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- <a href="#" class="navbar-brand">Willian</a> -->
				</div>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo action('SiteController@index'); ?>">Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutoriais <i class="caret"></i></a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu">
										<a href="#">Php</a>

										<ul class="dropdown-menu">
											<li class="dropdown-submenu">
												<a href="#">Frameworks</a>
												<ul class="dropdown-menu">
													<li><a href="#">Laravel</a></li>
												</ul>
											</li>
											<li role="presentation" class="divider"></li>
											<li><a href="">php2</a></li>
										</ul>
									</li>
									<li role="presentation" class="divider"></li>
									<li><a href="#">Php</a></li>
									<li role="presentation" class="divider"></li>
									<li><a href="#">Php</a></li>
								</ul>
						</li>
						<li><a href="<?php echo action('SiteController@sobre'); ?>">Sobre</a></li>
					</ul>
				</div>
			</div>
		</div>
		<br /><br /><br />
		<!-- Conteúdo dinâmico do site -->
		<?php echo $html; ?>
		
		<br />
		<!-- Footer do site -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 well">
					Copyright &copy; LigDark.
					
					<div class="pull-right">
						<a href="#"><i class="largeIcon fa fa-facebook"></i></a>
						<i class="largeIcon fa fa-youtube"></i>
						<i class="largeIcon fa fa-twitter"></i>
					</div>
					
				</div>
			</div>
		</div>
	</body>
</html>