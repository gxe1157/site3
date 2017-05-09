	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>


    <section id="contact-page" class="container">
	<br />
        <div class="row">
            <div class="col-sm-8">
			    <?php if($success): ?>
					<div class="status alert alert-success"><?= $success ?></div>
			    <?php elseif($fail): ?>					
					<div class="alert alert-danger"><?= $fail ?></div>					
				<?php else: ?>
					<p>If you have any questions regarding our products or services, please call or send us an email.</p>				
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="/home/sendemail" role="form">
						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
									<input type="text" class="form-control" name="first" required="required" placeholder="First Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="last" required="required" placeholder="Last Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="email" required="required" placeholder="Email address">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg">Send Message</button>
								</div>
							</div>
							<div class="col-sm-7">
								<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
							</div>
						</div>
					</form>
				<?php endif ?>	
            </div><!--/.col-sm-8-->
            <div class="col-sm-4">
				<div id="map" style="width: 413px; height: 300px;"></div>
 				<script type="text/javascript">// <![CDATA[
				 
				var mapOptions = {
					zoom: 17,
					center: new google.maps.LatLng(54.00, -3.00),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				 
				var geocoder = new google.maps.Geocoder();
				 
				var address = '123-133 So. Newman St. Hackensack, NJ 07601';
				 
				geocoder.geocode( { 'address': address}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						map.setCenter(results[0].geometry.location);
						var marker = new google.maps.Marker({
							map: map,
							position: results[0].geometry.location
						});
					} else {
						alert("Geocode was not successful for the following reason: " + status);
					}
				});
				 
				var map = new google.maps.Map(document.getElementById("map"), mapOptions);
				// ]]></script>
            </div><!--/.col-sm-4-->
        </div>
    </section><!--/#contact-page-->

