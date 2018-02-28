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