
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<title>
		<?php bloginfo('name'); ?>
	</title>
    <?php //wp_head();
	//wp_footer(); ?>
   <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' );?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' );?>/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' );?>/css/style1.css">

<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' );?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' );?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' );?>/js/index.js"></script>



	<link rel="icon"
		type="image/png"
		href="<?php bloginfo( 'stylesheet_directory' );?>/images/favicon.png">
	
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet">

   

</head>

<body>
<nav class="navbar-inverse">
    	<div class="container-fluid">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" 
                data-toggle="collapse" data-target="#myNavbar">
                	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                    
                </button>
                <a href="<?php the_permalink(); ?>" class="navbar-brand">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            
            	<?php 
				
				$arg = array(
						'theme_location' => 'primary',
						'menu' => 'top_menu',
						'depth' => 2,
						'container' => false,
						'menu_class' => 'nav navbar-nav navbar-right',
						'menu-item-has-children' => 'dropdwn-icon',
						//Process nav menu using our custom nav walker
						'walker' => new wp_bootstrap_navwalker())
				
				?>
                
            	<?php wp_nav_menu($arg); ?>
                
               
                
            </div>
        </div>
</nav>

<?php //if (is_page(blog)){ ?>
	
<!--<div class="jumbotron text-center">
<h1>Your Blog Here.....</h1>
</div>-->  
	
<?php	//} ?>   
    

