$(document).ready(function(){

	$('.re').click(function(e){
		e.preventDefault();
		$('.forma.reg').css('display','block');
		$('.forma.auth').css('display','none');
	})
	$('.au').click(function(e){
		e.preventDefault();
		$('.forma.auth').css('display','block');
		$('.forma.reg').css('display','none');
	})
	
	
});