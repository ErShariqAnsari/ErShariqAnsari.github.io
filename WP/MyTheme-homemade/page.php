<?php 

get_header();

?>


<!--Carosoul Slider Start-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('editable_slider_image_1')); ?>" class="hidden-xs" />
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('editable_slider_image_1')); ?>" style="height:200px" class="visible-xs" />
      <div class="carousel-caption">
        <h3><?php echo get_theme_mod('editable_slider_heading_1'); ?></h3>
        <p><?php echo get_theme_mod('editable_slider_description_text_1'); ?></p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('editable_slider_image_2')); ?>" class="hidden-xs">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('editable_slider_image_2')); ?>" style="height:200px" class="visible-xs" />
      <div class="carousel-caption">
        <h3><?php echo get_theme_mod('editable_slider_heading_2'); ?></h3>
        <p><?php echo get_theme_mod('editable_slider_description_text_2'); ?></p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('editable_slider_image_3')); ?>" class="hidden-xs" />
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('editable_slider_image_3')); ?>" style="height:200px" class="visible-xs" />
      <div class="carousel-caption">
        <h3><?php echo get_theme_mod('editable_slider_heading_3'); ?></h3>
        <p><?php echo get_theme_mod('editable_slider_description_text_3'); ?></p>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('editable_slider_image_4')); ?>" class="hidden-xs" />
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('editable_slider_image_4')); ?>" style="height:200px" class="visible-xs" />
      <div class="carousel-caption">
        <h3><?php echo get_theme_mod('editable_slider_heading_4'); ?></h3>
        <p><?php echo get_theme_mod('editable_slider_description_text_4'); ?></p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control custom-carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control custom-carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--End Carosoul Slider Start-->


<div class="naveigate" style="background:#30C; padding:15px 0">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<h2 class="mdem22 smem20 xsem16 lh150 text-center whitetext margin0">
&#9776; Find Your Product Here &#9776;</h2>
</div>
</div>
</div>
</div>


<!--Body Content Part Start Which Have 3 and 9 Colum-->
<div class="content-part">
<!--sidebar col 3 start-->
<div class="col-md-3 col-sm-4 col-xs-12 padding0">
<div id="mySidenav" class="sidenav">	
	
	<a href="javascript:void(0)" class="Menu" onclick="closeNav()">
    <span class="glyphicon glyphicon-th"></span> 
    Menu</a>  
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
    <span class="glyphicon glyphicon-off"></span>
    </a>
    
    
<div class="panel-group" id="accordion">
  <!--1st pannel Start-->
  <div class="panel panel-default">
  <div class="panel-heading">
  <a href="#collapse1" class="hvr-sweep-to-right" data-toggle="collapse" data-parent="#accordion">
  <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">      
      <div class="panel-title">
        <span class="glyphicon glyphicon-tasks"></span> Services
      </div></div>
      <div class="col-md-4 col-sm-4 col-xs-4">
      <span class="badge">20</span>
      </div>
  </div>
  </a>
  </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body padding0">
		<ul class="padding0 margin0 sub-heading">
		<li><a href="#"><span class="glyphicon glyphicon-comment"></span> Comment</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
    
    	<li class="panel-heading">
        <div class="panel-title">
		<a href="#collapse-inner" data-toggle="collapse" data-parent="#collapse1">
		<div class="row" style="width:110%">
		<div class="col-md-8 col-sm-8 col-xs-8">      
		<div class="panel-title">
        <span class="glyphicon glyphicon-picture"></span> Gallery
		</div></div>
		<div class="col-md-4 col-sm-4 col-xs-4">
		<span class="badge"><span class="glyphicon glyphicon-menu-down"></span></span>
		</div>
		</div>
        </a>
        </div>
        </li>
        	<div id="collapse-inner" class="panel-collapse collapse">
      			<div class="panel-body padding0">
					<ul class="padding0 margin0 sub2-heading">
					<li><a href="#">
                    <span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-user"></span> Profile</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-stats"></span> Tour</a></li>
                    </ul>
              </div>
           </div>
		</ul>
	  </div>
    </div>
  </div>  
  <!--1st pannel End-->
  
  <!--1ast pannel Start-->
  <div class="panel panel-default">
  <div class="panel-heading">
  <a href="#collapse1a" class="hvr-sweep-to-top" data-toggle="collapse" data-parent="#accordion">
  <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">      
      <div class="panel-title">
        <span class="glyphicon glyphicon-console"></span> Console
      </div></div>
      <div class="col-md-4 col-sm-4 col-xs-4">
      <span class="badge">20</span>
      </div>
  </div>
  </a>
  </div>
    <div id="collapse1a" class="panel-collapse collapse">
      <div class="panel-body padding0">
		<ul class="padding0 margin0 sub-heading">
		<li><a href="#"><span class="glyphicon glyphicon-comment"></span> Comment</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
    
    	<li class="panel-heading">
        <div class="panel-title">
		<a href="#collapse-inner1a" data-toggle="collapse" data-parent="#collapse1a">
		<div class="row" style="width:110%">
		<div class="col-md-8 col-sm-8 col-xs-8">      
		<div class="panel-title">
        <span class="glyphicon glyphicon-picture"></span> Gallery
		</div></div>
		<div class="col-md-4 col-sm-4 col-xs-4">
		<span class="badge"><span class="glyphicon glyphicon-menu-down"></span></span>
		</div>
		</div>
        </a>
        </div>
        </li>
        	<div id="collapse-inner1a" class="panel-collapse collapse">
      			<div class="panel-body padding0">
					<ul class="padding0 margin0 sub2-heading">
					<li><a href="#">
                    <span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-user"></span> Profile</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-stats"></span> Tour</a></li>
                    </ul>
              </div>
           </div>
		</ul>
	  </div>
    </div>
  </div>  
  <!--1ast pannel End-->
  
  <!--1bst pannel Start-->
  <div class="panel panel-default">
  <div class="panel-heading">
  <a href="#collapse1b" class="hvr-bounce-to-left" data-toggle="collapse" data-parent="#accordion">
  <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">      
      <div class="panel-title">
        <span class="glyphicon glyphicon-calendar"></span> calendar
      </div></div>
      <div class="col-md-4 col-sm-4 col-xs-4">
      <span class="badge">20</span>
      </div>
  </div>
  </a>
  </div>
    <div id="collapse1b" class="panel-collapse collapse">
      <div class="panel-body padding0">
		<ul class="padding0 margin0 sub-heading">
		<li><a href="#"><span class="glyphicon glyphicon-comment"></span> Comment</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
    
    	<li class="panel-heading">
        <div class="panel-title">
		<a href="#collapse-inner1b" data-toggle="collapse" data-parent="#collapse1b">
		<div class="row" style="width:110%">
		<div class="col-md-8 col-sm-8 col-xs-8">      
		<div class="panel-title">
        <span class="glyphicon glyphicon-picture"></span> Gallery
		</div></div>
		<div class="col-md-4 col-sm-4 col-xs-4">
		<span class="badge"><span class="glyphicon glyphicon-menu-down"></span></span>
		</div>
		</div>
        </a>
        </div>
        </li>
        	<div id="collapse-inner1b" class="panel-collapse collapse">
      			<div class="panel-body padding0">
					<ul class="padding0 margin0 sub2-heading">
					<li><a href="#">
                    <span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-user"></span> Profile</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-stats"></span> Tour</a></li>
                    </ul>
              </div>
           </div>
		</ul>
	  </div>
    </div>
  </div>  
  <!--1bst pannel End-->
  
  <!--1cst pannel Start-->
  <div class="panel panel-default">
  <div class="panel-heading">
  <a href="#collapse1c" class="hvr-radial-out" data-toggle="collapse" data-parent="#accordion">
  <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">      
      <div class="panel-title">
        <span class="glyphicon glyphicon-apple"></span> Mobiles
      </div></div>
      <div class="col-md-4 col-sm-4 col-xs-4">
      <span class="badge">20</span>
      </div>
  </div>
  </a>
  </div>
    <div id="collapse1c" class="panel-collapse collapse">
      <div class="panel-body padding0">
		<ul class="padding0 margin0 sub-heading">
		<li><a href="#"><span class="glyphicon glyphicon-comment"></span> Comment</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
    
    	<li class="panel-heading">
        <div class="panel-title">
		<a href="#collapse-inner1c" data-toggle="collapse" data-parent="#collapse1c">
		<div class="row" style="width:110%">
		<div class="col-md-8 col-sm-8 col-xs-8">      
		<div class="panel-title">
        <span class="glyphicon glyphicon-picture"></span> Gallery
		</div></div>
		<div class="col-md-4 col-sm-4 col-xs-4">
		<span class="badge"><span class="glyphicon glyphicon-menu-down"></span></span>
		</div>
		</div>
        </a>
        </div>
        </li>
        	<div id="collapse-inner1c" class="panel-collapse collapse">
      			<div class="panel-body padding0">
					<ul class="padding0 margin0 sub2-heading">
					<li><a href="#">
                    <span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-user"></span> Profile</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-stats"></span> Tour</a></li>
                    </ul>
              </div>
           </div>
		</ul>
	  </div>
    </div>
  </div>  
  <!--1cst pannel End-->
  
  <!--1dst pannel Start-->
  <div class="panel panel-default">
  <div class="panel-heading">
  <a href="#collapse1d" class="hvr-radial-in" data-toggle="collapse" data-parent="#accordion">
  <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">      
      <div class="panel-title">
        <span class="glyphicon glyphicon-book"></span> Books 
      </div></div>
      <div class="col-md-4 col-sm-4 col-xs-4">
      <span class="badge">20</span>
      </div>
  </div>
  </a>
  </div>
    <div id="collapse1d" class="panel-collapse collapse">
      <div class="panel-body padding0">
		<ul class="padding0 margin0 sub-heading">
		<li><a href="#"><span class="glyphicon glyphicon-comment"></span> Comment</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
    
    	<li class="panel-heading">
        <div class="panel-title">
		<a href="#collapse-inner1d" data-toggle="collapse" data-parent="#collapse1d">
		<div class="row" style="width:110%">
		<div class="col-md-8 col-sm-8 col-xs-8">      
		<div class="panel-title">
        <span class="glyphicon glyphicon-picture"></span> Gallery
		</div></div>
		<div class="col-md-4 col-sm-4 col-xs-4">
		<span class="badge"><span class="glyphicon glyphicon-menu-down"></span></span>
		</div>
		</div>
        </a>
        </div>
        </li>
        	<div id="collapse-inner1d" class="panel-collapse collapse">
      			<div class="panel-body padding0">
					<ul class="padding0 margin0 sub2-heading">
					<li><a href="#">
                    <span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-user"></span> Profile</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-stats"></span> Tour</a></li>
                    </ul>
              </div>
           </div>
		</ul>
	  </div>
    </div>
  </div>  
  <!--1dst pannel End-->
  
  <!--1est pannel Start-->
  <div class="panel panel-default">
  <div class="panel-heading">
  <a href="#collapse1e" class="hvr-rectangle-out" data-toggle="collapse" data-parent="#accordion">
  <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">      
      <div class="panel-title">
        <span class="glyphicon glyphicon-send"></span> Setting
      </div></div>
      <div class="col-md-4 col-sm-4 col-xs-4">
      <span class="badge">20</span>
      </div>
  </div>
  </a>
  </div>
    <div id="collapse1e" class="panel-collapse collapse">
      <div class="panel-body padding0">
		<ul class="padding0 margin0 sub-heading">
		<li><a href="#"><span class="glyphicon glyphicon-comment"></span> Comment</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
    
    	<li class="panel-heading">
        <div class="panel-title">
		<a href="#collapse-inner1e" data-toggle="collapse" data-parent="#collapse1e">
		<div class="row" style="width:110%">
		<div class="col-md-8 col-sm-8 col-xs-8">      
		<div class="panel-title">
        <span class="glyphicon glyphicon-picture"></span> Gallery
		</div></div>
		<div class="col-md-4 col-sm-4 col-xs-4">
		<span class="badge"><span class="glyphicon glyphicon-menu-down"></span></span>
		</div>
		</div>
        </a>
        </div>
        </li>
        	<div id="collapse-inner1e" class="panel-collapse collapse">
      			<div class="panel-body padding0">
					<ul class="padding0 margin0 sub2-heading">
					<li><a href="#">
                    <span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-user"></span> Profile</a></li>
					<li><a href="#">
                    <span class="glyphicon glyphicon-stats"></span> Tour</a></li>
                    </ul>
              </div>
           </div>
		</ul>
	  </div>
    </div>
  </div>  
  <!--1est pannel End-->
  
  <!--2nd pannel Start-->
  <div class="panel panel-default">
    <div class="panel-heading">
	<a data-toggle="collapse" class="hvr-rectangle-in" data-parent="#accordion" href="#collapse2">
	<div class="row">
		<div class="col-md-8 col-sm-8 col-xs-8">      
		<div class="panel-title">
			<span class="glyphicon glyphicon-plus"></span> About
		</div>
        </div>
		<div class="col-md-4 col-sm-4 col-xs-4">
		<span class="badge">10</span>
      </div>
	</div>
	</a>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
  <!--2nd pannel End-->
  
  <!--3rd pannel Start-->
  <div class="panel panel-default">
    <div class="panel-heading">
	<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
    <div class="row">
		<div class="col-md-8 col-sm-8 col-xs-8">      
		<div class="panel-title">
			<span class="glyphicon glyphicon-user"></span> Clients
		</div>
        </div>
		<div class="col-md-4 col-sm-4 col-xs-4">
		<span class="badge">100</span>
      </div>
	</div>    
	</a>
    
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
  <!--3rd pannel End-->
  
  <!--4th pannel Start-->
  <div class="panel panel-default">
    <div class="panel-heading">      
	<a href="http://www.google.com">
    <div class="row">
		<div class="col-md-8 col-sm-8 col-xs-8">      
		<div class="panel-title">
			<span class="glyphicon glyphicon-phone-alt"></span> Contact
		</div>
        </div>
		<div class="col-md-4 col-sm-4 col-xs-4">
		<span class="badge">00</span>
      </div>
	</div>    
	</a>      
    </div>    
  </div>
  <!--4th pannel End-->
  
  
  
</div><!--Panel Group End-->
</div><!--Sideber End-->

<div class="panel panel-primary margin_top2">
	<div class="panel-heading">Ads Area</div>
	<div class="panel-body"><img src="http://localhost/wordpress/wp-content/uploads/2017/02/2.png" class="img-responsive" />
    </div>
	<div class="panel-footer">
    <a href="#link" class="btn btn-primary">get Excited Deal</a></div>
</div>

<div class="fixed-video-area">
<div class="panel panel-primary margin_top2">
	<div class="panel-heading">Video Area</div>
	<div class="panel-body video-area">
    <?php 
	$video_file = get_template_directory_uri() . "/images/demo.mp4";
	echo do_shortcode('[video mp4=' . $video_file . ']');	
	?>
    </div>
	<div class="panel-footer">
    <a href="#youtube-chanel" class="btn btn-primary">Subscribe on YouTube</a></div>
</div>
</div>
    
</div>
<!--sidebar end-->


<!--Right side col 9 start-->
<div class="col-md-9 col-sm-8 col-xs-12">
<!--<div class="well well-small margin_top2">
<div id="featured1" class="featured carousel slide">

<div class="carousel-inner">
<div class="item active">
<?php //echo do_shortcode('[gallery columns="4" link="file" ids="196,195,137,136"]'); ?>
</div>
<div class="item">
<?php //echo do_shortcode ('[gallery link="file" columns="4" ids="158,156,152,139"]');?>
</div>
</div>
<a class="left carousel-control featured-carousel-control" href="#featured1" data-slide="prev">‹</a>
<a class="right carousel-control featured-carousel-control" href="#featured1" data-slide="next">›</a>
</div>
</div>-->

<?php
$gallery_cat = new WP_Query(array(
			
			
			'post_type'=>'product_type',
			'cat'=>'13',
			
			));
if(have_posts()) :
	while($gallery_cat->have_posts()) : $gallery_cat->the_post();?>
    
     
    
    <?php the_content(); ?>
    
    
	<?php endwhile;	
	
	wp_reset_postdata();

	else:
	echo '<p>No Content Found</p>';	
	
endif; ?>



<div class="blogpost-area" style="clear:both;">
<div class="well well-small margin_top2">
	<h4><?php echo get_cat_name(4); ?> <small class="pull-right">200+ featured products</small>
	</h4>
	<div class="row">
	

<?php

$cat1 = new WP_Query(array(

			'post_type'=>'product_type',
			'cat' => '4',
			'posts_per_page' => '6',

));
if($cat1->have_posts()) :
	while($cat1->have_posts()) : $cat1->the_post();?>
    
     
    
    <div class="col-md-4 col-sm-6 col-xs-12 margin_top2 margin_bottom2">
    <div class="panel panel-primary">
		<div class="panel-heading"><?php the_title(); ?></div>
			<div class="panel-body">
            <div class="grow pic">		  
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('small_thumbnail',array( 'class'  => 'center-block , img-responsive' )); ?>                 
			</a>
            </div>
			<div class="caption">
			<h5>product1</h5>
			<h4><a href="<?php the_permalink(); ?>" class="btn btn-info">View</a>
            <span class="pull-right">$222.00</span></h4>
			</div>
		</div>
		<div class="panel-footer">
			<a href="#get Excited Deal" class="btn btn-danger">
			 get Excited Deal</a>
		</div>                    
                    
	</div>
    </div>
    
    
	<?php endwhile;
	

       
	wp_reset_postdata();
	

	else:
	echo '<p>No Content Found</p>';	
	
endif; ?>

 
   
    </div>
    </div>
    
    <div class="well well-small">
	<h4>Cat2 <small class="pull-right">200+ featured products</small>
	</h4>
	<div class="row">
	

<?php
$bootstrap_cat = new WP_Query(array(
			
			
			'post_type'=>'post' ,			
			
			));
if(have_posts()) :
	while($bootstrap_cat->have_posts()) : $bootstrap_cat->the_post();?>
    
     
    
    <div class="col-md-4 col-sm-6 col-xs-12 margin_top2 margin_bottom2">
    <div class="panel panel-primary">
		<div class="panel-heading"><?php the_title(); ?></div>
			<div class="panel-body">			  
			<a href="##">
			<?php the_post_thumbnail('small_thumbnail',array( 'class'  => 'center-block , img-responsive' )); ?>                 
			</a>
			<div class="caption">
			<h5><?php echo get_the_excerpt(); ?></h5>
			<h4><a href="<?php the_permalink(); ?>" class="btn btn-info">View</a>
            <span class="pull-right">$222.00</span></h4>
			</div>
		</div>
		<div class="panel-footer">
			<a href="#get Excited Deal" class="btn btn-danger">
			 get Excited Deal</a>
		</div>                    
                    
	</div>
    </div>
    
    
	<?php endwhile;
	
	wp_reset_postdata();
	 next_posts_link();
	previous_posts_link();

	else:
	echo '<p>No Content Found</p>';	
	
endif; ?>

 	
   
    </div>
    </div>
    
    
</div>


			<!--<div class="item">
			  <ul class="thumbnails margin0">
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/5.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/1.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/10.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/6.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>-->



<!--<div class="well well-small margin_top2">
			<h4>Featured Products <small class="pull-right">200+ featured products</small>
            </h4>
			<div class="row-fluid">
			<div id="featured1" class="featured carousel slide">
			<div class="carousel-inner">
			   <div class="item active">
			  <ul class="thumbnails margin0">
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
				  <i class="tag">Camera</i>
					<a href="##">
                  <img src="http://localhost/wordpress/wp-content/uploads/2017/02/1.png" />
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn btn-info" href="#">VIEW</a> 
                      <span class="pull-right badge margin_top4">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
				  <i class="tag">Memory Card</i>
					<a href="product_details/">
            <img src="http://localhost/wordpress/wp-content/uploads/2017/02/3.png" alt="">
            	</a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details/">
                    <img src="http://localhost/wordpress/wp-content/uploads/2017/03/b2.jpg" alt="">
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/1.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			 <div class="item">
			  <ul class="thumbnails margin0">
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/5.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/1.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/10.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/6.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails margin0">
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/b1.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/b2.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/b3.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/b4.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails margin0">
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/8.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/6.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/10.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="thumbnail">
					<a href="product_details/"><img src="http://localhost/wordpress/wp-content/uploads/2017/03/5.jpg" alt=""></a>
					<div class="caption">
					  <h5>Product name</h5>
					   <h4><a class="btn" href="product_details/">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control featured-carousel-control" href="#featured1" data-slide="prev">‹</a>
			  <a class="right carousel-control featured-carousel-control" href="#featured1" data-slide="next">›</a>
			  </div>
			  </div>
</div>-->


<!--<div class="product1">

<div class="well well-small">
			<h4>Camera Products <small class="pull-right">200+ featured products</small>
            </h4>
			<div class="row-fluid">
			<div id="featured2" class="featured carousel slide">
			<div class="carousel-inner">
			   <div class="item active">
			  <ul class="thumbnails margin0">
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="panel panel-primary">
                  <div class="panel-heading">Camera</div>
                  <div class="panel-body">			  
					<a href="##">
                    <img src="<?php echo get_template_directory_uri() . '/images/bonus1.jpg'; ?>" class="img-responsive center-block" />                  
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
                    </div>
                    <div class="panel-footer">
                    <a href="#get Excited Deal" class="btn btn-danger">
                    get Excited Deal</a></div>                    
                    
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="panel panel-primary">
                  <div class="panel-heading">Memory Card</div>
                  <div class="panel-body">			  
					<a href="##">
                  <img src="http://localhost/wordpress/wp-content/uploads/2017/02/2.png" class="img-responsive"/>
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
                    </div>
                    <div class="panel-footer">
                    <a href="#get Excited Deal" class="btn btn-danger">
                    get Excited Deal</a></div>                    
                    
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="panel panel-primary">
                  <div class="panel-heading">Camera</div>
                  <div class="panel-body">			  
					<a href="##">
                  <img src="http://localhost/wordpress/wp-content/uploads/2017/03/8.jpg" class="img-responsive"/>
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
                    </div>
                    <div class="panel-footer">
                    <a href="#get Excited Deal" class="btn btn-danger">
                    get Excited Deal</a></div>                    
                    
				  </div>
				</li>
				<li class="col-md-4 col-sm-6 col-xs-12">
				  <div class="panel panel-primary">
                  <div class="panel-heading">Camera</div>
                  <div class="panel-body">			  
					<a href="##">
                  <img src="http://localhost/wordpress/wp-content/uploads/2017/03/6.jpg" class="img-responsive"/>
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
                    </div>
                    <div class="panel-footer">
                    <a href="#get Excited Deal" class="btn btn-danger">
                    get Excited Deal</a></div>                    
                    
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails margin0">
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="panel panel-primary">
                  <div class="panel-heading">Camera</div>
                  <div class="panel-body">			  
					<a href="##">
                  <img src="http://localhost/wordpress/wp-content/uploads/2017/02/1.png" class="img-responsive"/>
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
                    </div>
                    <div class="panel-footer">
                    <a href="#get Excited Deal" class="btn btn-danger">
                    get Excited Deal</a></div>                    
                    
				  </div>
				</li>
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="panel panel-primary">
                  <div class="panel-heading">Memory Card</div>
                  <div class="panel-body">			  
					<a href="##">
                  <img src="http://localhost/wordpress/wp-content/uploads/2017/02/2.png" class="img-responsive"/>
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
                    </div>
                    <div class="panel-footer">
                    <a href="#get Excited Deal" class="btn btn-danger">
                    get Excited Deal</a></div>                    
                    
				  </div>
				</li>
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="panel panel-primary">
                  <div class="panel-heading">Camera</div>
                  <div class="panel-body">			  
					<a href="##">
                  <img src="http://localhost/wordpress/wp-content/uploads/2017/03/8.jpg" class="img-responsive"/>
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
                    </div>
                    <div class="panel-footer">
                    <a href="#get Excited Deal" class="btn btn-danger">
                    get Excited Deal</a></div>                    
                    
				  </div>
				</li>
				<li class="col-md-3 col-sm-6 col-xs-12">
				  <div class="panel panel-primary">
                  <div class="panel-heading">Camera</div>
                  <div class="panel-body">			  
					<a href="##">
                  <img src="http://localhost/wordpress/wp-content/uploads/2017/03/6.jpg" class="img-responsive"/>
                    </a>
					<div class="caption">
					  <h5>Product name</h5>
					  <h4><a class="btn" href="#">VIEW</a> <span class="pull-right">$222.00</span></h4>
					</div>
                    </div>
                    <div class="panel-footer">
                    <a href="#get Excited Deal" class="btn btn-danger">
                    get Excited Deal</a></div>                    
                    
				  </div>
				</li>
			  </ul>
			  </div>			   
			  </div>
			  <a class="left carousel-control featured-carousel-control" href="#featured2" data-slide="prev">‹</a>
			  <a class="right carousel-control featured-carousel-control" href="#featured2" data-slide="next">›</a>
			  </div>
			  </div>
</div>
        
    
</div>-->



</div>
<!--end Right side col 9-->

</div>
<!--end Body Content Part-->
	
    
    
    
    
<?php
get_footer();
?>