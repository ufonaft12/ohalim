

$('.has_submenu').on('click', function(e){
 e.preventDefault()
 $('.menu-item_submenu').toggleClass('submenu-active');
});
 


$('.has_submenu').hover( 
	function(){
		if (window.innerWidth >= 1024 ) {
		$('.menu-item_submenu').addClass('submenu-active');
 	}
	}, 
	function(){
		if (window.innerWidth >= 1024 ) {
	$('.menu-item_submenu').removeClass('submenu-active');
 	}
 }
);

	jQuery(document).ready(function() {
		jQuery('#mobile-menu-btn').click(function(){
			jQuery(this).toggleClass('active');
			jQuery('.header__menu').toggleClass('active');
			jQuery('.menu_fon').toggleClass('menu_fon-active');
		});
	});