<?php
/*
*   Theme header for our Theme
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
		<!-- Custom Font -->
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400&display=swap" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/fontawesome/css/all.min.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="./custom.css">

		<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
		<header>
			<nav class="navbar navbar-expand-md navbar-light bg-light">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>"><?php echo get_bloginfo('name') ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog.html">Blog</a>
						</li>
					</ul>
				</div>
			</nav>

			<div class="container-fluid">
				<div class="row position-relative d-flex justify-content-center align-items-center text-center">
					<img src="./images/lake.jpg" alt="lake background" class="header_img">
					<div class="position-absolute feature-bg">
						<p class="feature-text">Full responsive<br/> PREMIUM SPA THEME<br/> FOR WORDPRESS</p>
					</div>
				</div>
			</div>
		</header>