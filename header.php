<?php 
function get_header($page_type) { ?>
<!DOCTYPE html>
<html dir="rtl" lang="he-IL" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name='robots' content='noindex,follow' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel='stylesheet' id='wp-css'  href='/wp/css/wp.css?ver=4.9.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap4-css'  href='/css/bootstrap.min.css?ver=4.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='fontawesome-css'  href='/css/fontawesome-all.min.css?ver=5.0.7' type='text/css' media='all' />
	<link rel='stylesheet' id='linearicons-css'  href='/css/linearicons-free.min.css?ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='beetle-style-css'  href='/css/beetle.css' type='text/css' media='all' />
	<?php if($page_type==="front-page") { ?>
	<link rel='stylesheet' id='beetle-front-page-style-css'  href='/css/beetle_front-page.css' type='text/css' media='all' />
	<?php } ?>
		<?php if($page_type==="contacts") { ?>
	<link rel='stylesheet' id='beetle-front-page-style-css'  href='/css/contacts.css' type='text/css' media='all' />
	<?php } ?>
	<?php if($page_type==="text-page") { ?>
	<link rel='stylesheet' id='beetle-front-page-style-css'  href='/css/text-page.css' type='text/css' media='all' />
	<?php } ?>
	<script type='text/javascript' src='/js/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='/js/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='/js/bootstrap.min.js?ver=4.0.0'></script>
	<script type='text/javascript' src='/js/beetle.js'></script>
</head>
<body class="rtl<?php echo ' '.$page_type; ?>">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12 content">
					<a class="mobile-menu-btn" href="#menu">
						<span></span>
						<span></span>
						<span></span>
					</a>
					<div class="col-logo col-right col-table">
						<a class="vertical-center" href="/" alt="ohalim">
							<img src="/img/logo.png" alt="ohalim" title="ohalim">
						</a>
					</div>
					<div id="menu" class="col-menu col-right">
						<ul id="menu-header" class="menu-header">
							<li class="menu-item menu-item-has-children">
								<a href="#">השכרת אוהלים</a>
								<ul class="sub-menu">
									<li class="menu-item">
										<a href="#">צור קשר</a>
									</li>
									<li class="menu-item">
										<a href="#">צור קשר</a>
									</li>
									<li class="menu-item">
										<a href="#">צור קשר</a>
									</li>
									<li class="menu-item">
										<a href="#">צור קשר</a>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="#">השכרת ציוד לאירועים</a>
							</li>
							<li class="menu-item">
								<a href="#">אזורי שירות</a>
							</li>
							<li class="menu-item ">
								<a href="contacts.php">צור קשר</a>
							</li>
						</ul>
					</div>
					<div class="col-info col-left col-table">
						<div class="vertical-center">
							<div class="col-content">
								<div class="col-right">
									<a href="tel:072-3728117" alt="מספר טלפון: 072-3728117"><img src="/img/phone.png" alt="מספר טלפון: 072-3728117"></a>
								</div>
								<div class="col-left">
									<p>התקשרו לפרטים: </p>
									<a href="tel:072-3728117" alt="מספר טלפון: 072-3728117">072-3728117</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content">
<?php } ?>