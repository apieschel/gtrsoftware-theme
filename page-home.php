<?php 
    // Template Name: Home
    get_header();
?>

<div class="circle">
	<i class="fa fa-cog" aria-hidden="true"></i>
</div>

<main>
	<h1><?php esc_html_e('Web Development and Design Portfolio', 'gtrsoftware'); ?></h1>	
	<hr>
	
	<section id="projects">
		<div class="container-fluid">
			<div class="row">
				<h2 class="center"><br>DIRTY PAWS POETRY REVIEW</h2>
				<div class="col-md-7">
					<a href="<?php echo esc_url('https://dirtypawspoetry.com'); ?>" target="_blank"><img width="890" height="938" src="<?php bloginfo('stylesheet_directory'); ?>/assets/dirtypaws_portfolio.png" alt="screenshots of the Dirty Paws Poetry Review website in mobile, desktop, and tablet sizes" title="Dirty Paws Poetry Portfolio Entry"></a>
				</div>

				<div class="col-md-5 project-tile">
					<h3 class="center animated fadeInRight">SITE FEATURES</h3>
					<p>Ajax transitions between featured posts</p>
					<p>&nbsp;Dynamic styles using Advanced Custom Fields</p>
					<p>&nbsp;&nbsp;JQuery autoscroll of footer image</p>
					<p>&nbsp;&nbsp;&nbsp;Parallax scrolling of header image</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;Optimized for security, speed, and SEO</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Validated HTML and CSS</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Popup modal for email subscriptions</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Responsive design</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SVG hover animation</p>

					<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/dirtypaws_html_code_sample.PNG" data-lightbox="code1">
						<div class="code1"><span class="overlay">HTML Code Sample</span></div>
					</a>
					<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/custom_styles_code_snippet.PNG" data-lightbox="code2">
						<div class="code2"><span class="overlay">Custom Styles PHP &amp; CSS Code Sample</span></div>
					</a>
				</div>
			</div>
		</div> <!-- container-fluid -->

	
	<hr>

		<div class="container-fluid">
			<div class="row">
				<h2 class="center"><br>FRANKIE LAMAR POTTERY&nbsp;&nbsp;<i class="fa fa-cog" aria-hidden="true"></i></h2>
				<div class="col-md-7">
					<a href="<?php echo esc_url('https://frankielamar.com'); ?>" target="_blank"><img width="890" height="938" src="<?php bloginfo('stylesheet_directory'); ?>/assets/frankielamar_portfolio.png" alt="screenshots of the Frankie Lamar Pottery website in mobile, desktop, and tablet sizes" title="Frankie Lamar Pottery Portfolio Entry"></a>
				</div>

				<div class="col-md-5 project-tile">
					<h3 class="center frankie">SITE FEATURES</h3>
					<p>Fully functional E-commerce shop</p>
					<p>&nbsp;Custom WooCommerce page templates</p>
					<p>&nbsp;&nbsp;CSS coffee cup animation</p>
					<p>&nbsp;&nbsp;&nbsp;Custom Lightbox gallery</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;Optimized for security, speed, and SEO</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Validated HTML and CSS</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Popup modal for email subscriptions</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Responsive design</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Custom Masonry grid</p>

					<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/frankie_lamar_css_code_sample.PNG" data-lightbox="code3">
						<div class="code3"><span class="overlay">CSS Code Sample</span></div>
					</a>
					<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/frankie_lamar_html_code_sample.PNG" data-lightbox="code4">
						<div class="code4"><span class="overlay">HTML Code Sample</span></div>
					</a>

					<br><br>
				</div>
			</div>	
		</div> <!-- container-fluid -->
			
	<hr>
	
		<div class="container-fluid">
			<div class="row">
				<h2 class="center"><br>MAIN STREET CHRISTIAN SCHOOL&nbsp;&nbsp;<i class="fa fa-cog" aria-hidden="true"></i></h2>
				<div class="col-md-7">
					<a href="<?php echo esc_url('https://mainstreetchristianschool.space'); ?>" target="_blank"><img width="890" height="938" src="<?php bloginfo('stylesheet_directory'); ?>/assets/mainstreet_portfolio.png" alt="screenshots of the Frankie Lamar Pottery website in mobile, desktop, and tablet sizes" title="Main Street Christian School Portfolio Entry"></a>
				</div>

				<div class="col-md-5 project-tile">
					<h3 class="center frankie">SITE FEATURES</h3>
					<p>Validated HTML and CSS</p>
					<p>&nbsp;Accessibility Testing</p>
					<p>&nbsp;&nbsp;Optimized for security, speed, and SEO</p>
					<p>&nbsp;&nbsp;&nbsp;Responsive design</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;Parallax Scrolling</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Custom Lightbox Gallery</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Custom Wordpress Templates</p>

					<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/mainstreet_css_code_sample.PNG" data-lightbox="code3">
						<div class="code5"><span class="overlay">CSS Code Sample</span></div>
					</a>
					<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/mainstreet_php_code_sample.PNG" data-lightbox="code4">
						<div class="code6"><span class="overlay">PHP Code Sample</span></div>
					</a>

					<br><br>
				</div>
			</div>	
		</div> <!-- container-fluid -->
	</section>

</main>

<?php get_footer(); ?>