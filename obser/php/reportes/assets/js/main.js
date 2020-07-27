$(document).ready(function(){
	$('.submenu li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		} else {
			$('.submenu li ul').slideUp();
			$('.submenu li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});

	$('.btn-menu').click(function(){
		$('.contenedor-menu .submenu').slideToggle();
	});

	$(window).resize(function(){
		if ($(document).width() > 450){
			$('.contenedor-menu .submenu').css({'display' : 'block'});
		}

		if ($(document).width() < 450){
			$('.contenedor-menu .submenu').css({'display' : 'none'});
			$('.submenu li ul').slideUp();
			$('.submenu li').removeClass('activado');
		}
	});

	$('.submenu li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});
});
