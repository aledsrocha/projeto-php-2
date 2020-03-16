$('nav a').click(function(e){
	e.preventDefault();//prevenir que 

	var id = $(this).attr('href');
	targetOffset = $(id).offset().top; // retorna o topo e left do elemento

	$('html, body').animate({// seleciona os dois pra diferentes browsers

		scrollTop: targetOffset

	}, 500);
});


