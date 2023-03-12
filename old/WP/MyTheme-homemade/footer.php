
<footer>

<div class="footer-callout">
	<div class="container">
    	<div class="row">
        	<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 footer-callout-all">
            	<div class="col-md-4 col-sm-4 col-xs-12 margin_top1">
                <div class="footer-callout-image">
                	<img src="<?php echo wp_get_attachment_url(get_theme_mod('editable_footer_callout_image')); ?>" class="center-block img-responsive" />
                </div>                
                </div>
                
                <div class="col-md-8 col-sm-8 col-xs-12 margin_top1">
                <div class="footer-callout-text talkbubble">
                <h2 class="whitetext margin0">
                <a href="<?php echo get_permalink(get_theme_mod('editable_footer_callout_link')); ?>">
				<?php echo get_theme_mod('editable_footer_callout_heading'); ?></a></h2>
                <p class="whitetext mdem12">
                <?php echo get_theme_mod('editable_footer_callout_text'); ?>
                </p>
                </div>
                </div>
            </div>
		</div>
	</div>
</div>






<div class="footer">
	<div class="container">
    	<div class="row">
        
        	<?php if(is_active_sidebar('footer1')) : ?>
        	<div class="col-md-3 col-sm-3 col-xs-12 text-center">
            <?php dynamic_sidebar('footer1'); ?>
            </div>
            <?php endif; ?>
            
            <?php if(is_active_sidebar('footer2')) : ?>
            <div class="col-md-3 col-sm-3 col-xs-12 text-center">
            <?php dynamic_sidebar('footer2'); ?>
            </div>
            <?php endif; ?>
            
            <?php if(is_active_sidebar('footer3')) : ?>
            <div class="col-md-3 col-sm-3 col-xs-12 text-center">
            <?php dynamic_sidebar('footer3'); ?>
            </div>
            <?php endif; ?>
            
            <?php if(is_active_sidebar('footer4')) : ?>
            <div class="col-md-3 col-sm-3 col-xs-12 text-center">
            <?php dynamic_sidebar('footer4'); ?>
            </div>
            <?php endif; ?>
            
        </div>
    </div>
</div>
</footer>






</body>




</html>