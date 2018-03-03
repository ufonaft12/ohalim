<?php include 'header.php';
get_header("contacts"); ?>


<div class="container">
	<div class="row">
		
		<div class="contacts col-md-6">
			<div class="contacts-form">
				<h1>יצירת קשר</h1>
				<h2>אנחנו כאן בשבילכם, נשמח לעמוד לשירותכם ולעזור בכל שאלה ובעיה הקשור לעולם ציוד לאירועים.</h2>
				<div class="row">
					<div class="col-md-12">
						<div role="form" class="wpcf7" id="wpcf7-f98-o1" dir="ltr" lang="en-US">
							<form action="/#wpcf7-f549-o1" method="post" class="wpcf7-form" novalidate="novalidate">
								<p>
									<span class="wpcf7-form-control-wrap your-name">
										<input name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="שם מלא" type="text">
									</span>
									<span class="wpcf7-form-control-wrap tel-928">
										<input name="tel-928" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="טלפון" type="tel">
									</span>
									<span class="wpcf7-form-control-wrap your-email">
										<input name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="דוא”לי" type="email">
									</span>
								</p>
								<p class="form-textarea">
									<span class="wpcf7-form-control-wrap textarea-800">
										<textarea name="textarea-800" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="ההודעה שלךי"></textarea>
									</span>
								</p>
								<p class="p-btn">
									<input value="שלח" class="wpcf7-form-control wpcf7-submit btn" type="submit">
									<span class="ajax-loader"></span>
								</p>
							</form>
						</div>
					</div>
				</div>
				
				<div class="contacts-form_footer row">
					<div class="item2 col-md-6">
						<img src="img/beacon.png" alt="כתובת">
						<p>כתובת:</p>
						<span> דרך חיים בר לב 64 תל אביב.</span>
					</div>
					<div class="item1 col-md-6">
						<a href="tel:072-3728117" alt="מספר טלפון: 072-3728117">
							<img src="img/phone.png" alt="טלפון">
							<p>טלפון:</p>
							<span>072-3728117</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="contacts col-md-6">
			<div id="contacts-map" class="contacts-map" style="min-height: 400px;"></div>
			<script>
			function initMap() {
			var uluru = {lat: 30.8572066, lng: 36.2585535};
			var map = new google.maps.Map(document.getElementById('contacts-map'), {
			zoom: 4,
			center: uluru
			});
			var marker = new google.maps.Marker({
			position: uluru,
			map: map
			});
			}
			</script>
		</div>
		
	</div>
	
</div>


<?php include 'footer.php'; ?>