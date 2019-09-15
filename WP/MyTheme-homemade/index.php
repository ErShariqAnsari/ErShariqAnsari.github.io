<?php 

get_header();?>

<div class="jumbotron text-center">
    <h1>Your Blog Here.....</h1>
</div>

<?php
if(have_posts()) :
	while(have_posts()) : the_post();?>
    <div class="strip1">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <h2 class="text-center whitetext mdem22 smem18 xsem16 margin0">
    <strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </strong></h2>
    <p class="post-info text-center whitetext">
	<?php the_time('F jS, Y g:i a'); ?> | by 
	<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
	<?php the_author(); ?></a> | Posted in 
    <?php 
	
	$categories = get_the_category();
	$separator = ",";
	$output = '';
	
	if($categories){
		
		foreach($categories as $category){
			
				$output .= '<a href="'. get_category_link($category->term_id).'">' . $category->cat_name . '</a>' . $separator;
			
			}
			
		echo trim($output,$separator);
		
		}
	
	?>
    </p>
    
    
    </div>
	</div>	
    </div>
    </div>
    <div class="blogpost-area" style="background:#FFFF99;">
    <div class="container">
    <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12 margin_top2 margin_bottom2">
    <?php the_post_thumbnail('small_thumbnail',array( 'class'  => 'center-block , img-responsive' )); ?>
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12 margin_top2 margin_bottom2">
    <div class="panel panel-primary">
    <div class="panel-heading mdem16"><?php the_title(); ?></div>
    <div class="panel-body">
    <p class="mdem14 smem13 xsem12 lh150">
    <?php //get_template_part('content' , 'page'); ?>
	<?php echo get_the_excerpt(); ?>
    <?php //the_content('Continue...>>'); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="btn btn-info">Read More</a>
    </div>    
    </div>
    </div>	
    </div>
    </div>
    </div>
	<?php endwhile;
	
	echo '<div class="well well-small pull-right mdem16 smem15 xsem14">'
	.paginate_links().'</div>';

	else:
	echo '<p>No Content Found</p>';	
	
endif; ?>
	
<?php
get_footer();
?>

