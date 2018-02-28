$('.has_submenu').hover( 
	function(){
		$('.menu-item_submenu').addClass('submenu-active');
		$('.has_submenu').css({
			'border-bottom': '4px solid blue'
		});
	}, function(){
	$('.menu-item_submenu').removeClass('submenu-active');
			$('.has_submenu').css({
			'border-bottom': 'none'
		});
}
);

$('.menu__burger').click( function(){

	if ($('.header__menu').hasClass('menu-active')) {
			$('.header__menu').removeClass('menu-active');
	} else {
			$('.header__menu').addClass('menu-active');
	}

});