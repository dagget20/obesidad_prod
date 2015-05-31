$(function(){
	'use strict';
	//Getting the form
	var form = $('#ajax-contact');

	//Getting the message div
	var formMessages = $('#form-messages');

	$(form).on('submit',function(evt){
		evt.preventDefault();
		
		var formData = $('form').serialize();

		$.ajax({
		type: 'POST',
		url: $('form').attr('action'),
		data: formData
		}).done(function(res){
			console.log('ok');
			console.log(res);
			$('#name input').val('');
			$('#phone input').val('');
			$('#email input').val('');
			$('#message textarea').val('');
			$(formMessages).text('Su mensaje ha sido enviado con éxito.');
		}).fail(function(data){
			$(formMessages).removeClass('sucess');
			$(formMessages).addClass('error');

			if (data.responseText !== ''){
				$(formMessages).text(data.responseText);
			} else{
				
			}
		});

	});

});