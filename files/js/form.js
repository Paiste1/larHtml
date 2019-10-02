$(document).ready(function(){

	$('form#callback input[name="name"]').click(function(){
		$('#callback div.error-name').css('display', 'none');
	})
	$('form#callback input[name="email"]').click(function(){
		$('#callback div.error-email').css('display', 'none');
	})

	$('form#callback input[type="submit"]').click(function(e){
		e.preventDefault();

		var name = $('form#callback input[name="name"]').val();
		var email = $('form#callback input[name="email"]').val();
		checkInputs = true;

		if (name == '' || name == ' ') {
			$('#callback div.error-name').css('display', 'block');
			checkInputs = false;
		}
		if (email == '' || email == ' ') {
			$('#callback div.error-email').css('display', 'block');
			checkInputs = false;
		}

		if(checkInputs == true) {
			window.location.href = 'class/mail.php'
		}

	})
	
});