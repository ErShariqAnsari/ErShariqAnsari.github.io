<?php 

get_header();?>


<?php if (is_page(about-us)){ ?>
	
<div class="jumbotron text-center">
<h1>Your About-us Here.....</h1>
</div>


<!--Sidebar in Col-md-3 sm-3 xs-12-->
<?php echo get_template_part( 'include/content-sidebar' ); ?>


<!--Another colum start Col-md-9 sm-9 xs-12-->

<div class="aboutus-section">
	<div class="col-md-9 col-sm-9 col-xs-12">
    <div class="well well-small">
    	<h1><strong>About Us</strong></h1><br/>
        <p class="mdem16 smem15 xsem14">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt.
        </p>
	</div>
    </div>
</div>
	
<?php	} ?>  



   
<?php
get_footer();
?>