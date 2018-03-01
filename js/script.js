$('.has_submenu').hover( 
	function(){
		$('.menu-item_submenu').addClass('submenu-active');
 
	}, function(){
	$('.menu-item_submenu').removeClass('submenu-active');
 
}
);

	jQuery(document).ready(function() {
		jQuery('#mobile-menu-btn').click(function(){
			jQuery(this).toggleClass('active');
			jQuery('.header__menu').toggleClass('active');
		});
	});