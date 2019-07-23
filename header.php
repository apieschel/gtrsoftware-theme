<!doctype html>

	<html lang="en">

	<head>
 	
	 	<meta charset="utf-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1">
			
		<title><?php bloginfo('title'); ?> <?php wp_title();?></title>
		
		<?php wp_head(); ?>
			
	</head>
	
	<body <?php body_class(); ?>>
	

		<!-- HEADER =========================================================================================-->
		<header>

			<!-- NAVBAR =============================================-->
			<div class="navbar-wrapper">

				<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navbar">

					<div class="container-fluid">

						<div class="navbar-header">

							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div>
						<!-- navbar header close-->

						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-left">
								<li><a href="/">Portfolio</a></li>
								<li class="nav-item dropdown" >
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
									
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="/javascript-calculator">Javascript Calculator</a>
										<a class="dropdown-item" href="/twitch-api">Twitch API</a>
										<a class="dropdown-item" href="/tic-tac-toe">Tic Tac Toe</a>
										<a class="dropdown-item" href="/simon">Simon</a>
										<a class="dropdown-item" href="/pomodoro">Pomodoro</a>
										<a class="dropdown-item" href="#projects">Websites</a>
									</div>
								</li>								
								<li><a href="/services">Services</a></li>
								<li><a href="/contact">Contact</a></li>
								<li><a id="profile-link" href="https://github.com/apieschel" target="_blank">Git</a></li>
							</ul>
							<div style="font-size:16px; margin-top:-8px;" class="nav navbar-nav navbar-right navbar-brand"><a style="color:#9d9d9d;" href="/">GOLDEN TRIANGLE SOFTWARE</a><br><span style="font-size:12px; text-align:right; position:relative; float:right;">Columbus, MS 39701</span></div>
						</div>

					</div>

				</div>

			</div>

		</header>

		
	<!--Header-->