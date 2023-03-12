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
	<a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
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
    <div class="container">
    <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12 margin_top2 margin_bottom2">
    <?php the_post_thumbnail('banner-image', array( 'class'  => 'center-block , img-responsive margin_bottom2' )); ?>
    
    <?php //get_template_part('content' , 'page'); ?>
    <?php the_content(); ?>
    
    
    <div class="about-author margin_top4">
    	<div class="row">
        	<div class="col-md-4 col-sm-4 col-xs-12 margin_top8">
            <?php echo get_avatar(get_the_author_meta('ID')); ?>
            <h4 class="text-center"><?php echo get_the_author_meta('nickname'); ?></h4>
            </div>
            
            
            <div class="col-md-8 col-sm-8 col-xs-12 cat-inner">
            <h3>About the Author <span class="glyphicon glyphicon-play"></span></h3>
            <div class="description alert alert-success">
            <p>
			<?php echo get_the_author_meta('description'); ?></p>
            </div>
            
            
            </div>
        </div>
        
        <div class="row">
        	<div class="col-md-4 col-sm-12 col-xs-12 margin_top4">
            <div class="form-area margin_top4">
            <form>
            <div class="col-md-12 col-sm-12 col-xs-12"/>
            <input type="text" name="username" placeholder="Name" 
            class="form-control" /></div>
            <div class="col-md-12 col-sm-12 col-xs-12 margin_top4"/>
            <input type="email" name="email" placeholder="Email" 
            class="form-control" /></div>
            <div class="col-md-12 col-sm-12 col-xs-12 margin_top4"/>
            <input type="submit" name="submit" value="Subscribe" 
            class="btn btn-success" /></div>
            </form>
            </div>
            </div>
            
            <?php $OtherAuthorPost = new WP_Query(array(
			'author' => get_the_author_meta('ID'),
			'posts_per_page' => 3			
			));				
			 ?>
             
            <div class="col-md-8 col-sm-12 col-xs-12 cat-inner">
            <?php if($OtherAuthorPost->have_posts()) { ?>
            <h4><strong>
            Other Posts By <span class="glyphicon glyphicon-play"></span>
             &nbsp;&nbsp;<span class="color-orange">
            <span class="glyphicon glyphicon-user"></span>
			<?php echo get_the_author_meta('nickname'); ?></span></strong>
            </h4>            
            <ul class="mdem12 smem11 xsem10">
            <?php while($OtherAuthorPost->have_posts()){		
			$OtherAuthorPost->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php } ?>
            </ul>
            <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    
    <div class="comment-section">
    	<?php
        if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				
				
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				
				
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}
			?>
    </div>
    
    </div>
    
    <div class="col-md-4 col-sm-4 col-xs-12 margin_top2">
    <div class="panel panel-primary">
    <div class="panel-heading mdem16">Put Your Add Here</div>
    <div class="panel-body">
    <h1 class="jumborton">Add Area</h1>
    </div>
    </div> 
    
    <div class="panel panel-primary">
    <div class="panel-heading mdem16">Subscribe</div>
    <div class="panel-body">
    <h1 class="jumborton">Contact Form Here</h1>
    </div>
    </div>
    
    
    <div class="category-area">
    <ul class="nav nav-tabs">
  	<li class="active"><a data-toggle="tab" href="#home">Categories</a>
    </li>
  	<li><a data-toggle="tab" href="#menu1">Recent Posts</a></li>
  	<li><a data-toggle="tab" href="#menu2">Archives</a></li>
	</ul>

    <div class="tab-content cat-inner scroll">
      <div id="home" class="tab-pane fade in active">        
        <?php dynamic_sidebar('sidebar1'); ?>
      </div>
      <div id="menu1" class="tab-pane fade">        
        <?php dynamic_sidebar('sidebar2'); ?>
      </div>
      <div id="menu2" class="tab-pane fade">        
        <?php dynamic_sidebar('sidebar3'); ?>
      </div>
    </div>
    </div>
	
    </div><!-- colum 4 end-->
    	
    </div>
    </div><!-- Container End -->
	<?php endwhile;

	else:
	echo '<p>No Content Found</p>';	
	
endif; ?>
	
<?php
get_footer();
?>