<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header class="header--main">
			<nav class="navbar">
		    	<div class="container--nav">
		        <!--<div id="navbar" class="collapse navbar-collapse">
		        	<ul class="nav navbar-nav">
		            	<li class="active"><a href="#"<div>Home</a></li>
		            	<li><a href="#about">About</a></li>
		            	<li><a href="#contact">Contact</a></li>
		          	</ul>
		        </div>--><!--/.nav-collapse -->
		        <div class="nav--wrapper">
		        	<div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
		          	<img src="<?php echo get_template_directory_uri() . '/img/logo.png'?>" alt="logo">
		          </a>
		        </div>

			        	<?php wp_nav_menu(array('menu_location' => 'primary',
			        		'menu_class' => 'nav navbar-nav nav--main',
			        		'container' => 'div',
			        		'container_class' => 'collapse navbar-collapse',
			        		'container_id' => 'navbar')); ?>
			 
		        </div>


		      </div><!-- nav .container-->
		    </nav>

		  
		    	<div class="row hero">
			    	<div class="col-md-8 col-md-offset-2">
			    		<div class="row hero__guarantee text-center">
			    			<div class="col-md-12">
			    				<p class="text-center">
			    					<img class="img-responsive" src="<?php echo get_template_directory_uri() . '/img/img-guarantee.png'; ?>" alt="100%"> 
			    				</p>
			    			</div>
			    		</div>
			    		<div class="row hero__trust-wrapper">
			    			<div class="col-md-3 hero__trusted-by text-center">
			    				<p class="">Trusted by</p>
			    			</div>
			    			<div class="col-md-9 hero__clients">
			    				<p class="">
			    					<img class="img-responsive" src="<?php echo get_template_directory_uri() . '/img/clients.jpg'; ?>" alt="clients"> 
			    				</p>
			    			</div>
			    		</div>
			    	</div>
			    </div>

			    <div class="previous">
			    	<i class="fa fa-angle-left"></i>
			    </div>

		    

		    <!--<div class="hero-old">
		    	<img class="img-responsive" src="<?php echo get_template_directory_uri() . '/img/guarantee.png'; ?>" alt="100%"> 
		    </div>-->

		</header>

		
		<div class="mbt-main">
					<div class="col col--main mbt-content">