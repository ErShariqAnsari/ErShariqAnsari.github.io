<?php 

get_header();?>


<?php if (is_page(contact-us)){ ?>
	
<div class="jumbotron text-center">
<h1>Contact From Here.....</h1>
</div>  
	
<?php	} ?>  


<!--Sidebar in Col-md-3 sm-4 xs-12-->

<div class="contact-details">
<div class="col-md-3 col-sm-4 col-xs-12">
    <div class="well well-small">
    <h1 class="mdem24 smem22 xsem20"><strong>Contact-US</strong></h1>
    <p class="mdem16 smem15 xsem14"><strong>Mobile No.</strong></p>
    <p class="mdem14 smem13 xsem12">shariq Ansari : +91 9001717177</p><br/>
    <p class="mdem16 smem15 xsem14"><strong>Email</strong></p>
    <p class="mdem14 smem13 xsem12">shariqmohd201@gmail.com</p>
    
    </div>
</div>
</div>


<!--Another colum start Col-md-9 sm-9 xs-12-->

<div class="contactus-section">
	<div class="col-md-9 col-sm-8 col-xs-12">
    <div class="well well-small">    
    <div id="panel">
        
        <form>
        <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="group">
                <input type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Name</label>
            </div>
		</div>
        
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="group">
                <input type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Email</label>
            </div>
		</div>
        </div>
        
            <div class="group">
                <input type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Mobile No</label>
            </div>

            <div class="group">
                <input type="text" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Message</label>
            </div>
            <div class="group">
                <center> <button type="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button></center>
            </div>
        </form>

    </div>


	</div>
    </div>
</div>

<div class="mgmap">
<!--Google Map Script-->
<div id="googleMap" style="height:400px;width:100%; margin-top:30px; margin-bottom:30px;"></div>

<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
		var myCenter = new google.maps.LatLng(25.2138, 75.8648);

		function initialize() {
			var mapProp = {
  			center:myCenter,
  			zoom:12,
  			scrollwheel:false,
  			draggable:false,
  			mapTypeId:google.maps.MapTypeId.ROADMAP
  						  };

			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker = new google.maps.Marker({
  												position:myCenter,
  											});

			marker.setMap(map);
								}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
</div>

   
<?php
get_footer();
?>