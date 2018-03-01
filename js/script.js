$('.has_submenu').hover( 
	function(){
		$('.menu-item_submenu').addClass('submenu-active');
 
	}, function(){
	$('.menu-item_submenu').removeClass('submenu-active');
 
}
);

$('.menu__burger').click( function(){

	if ($('.header__menu').hasClass('menu-active')) {
			$('.header__menu').removeClass('menu-active');
	} else {
			$('.header__menu').addClass('menu-active');
	}

});