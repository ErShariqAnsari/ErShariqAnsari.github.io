<?php 

get_header();


	if(have_posts()) :
	while(have_posts()) : the_post();
	
?>
    
    <div class="strip1">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <h2 class="text-center whitetext mdem22 smem18 xsem16 margin0">
    <strong><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong></h2>
    </div>
	</div>	
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <?php //get_template_part('content' , 'page'); ?>
    <?php the_content(); ?>
    </div>	
    </div>
    </div>
	<?php endwhile;

	else:
	echo '<p>No Content Found</p>';	
	
	endif; 
	
	?>
	
<?php
get_footer();
?>