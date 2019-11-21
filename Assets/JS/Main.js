//alert('fucking tesrt');
$(document)
.on("submit", "form.js-register", function(event){
	
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);
	var data = {
	email: $("input[type = 'email']", _form).val(),
	password: $("input[type = 'password']", _form).val()
	}

	if(data.email.length < 6)
	{
		_error.text("Please enter a valid email").show();
		return false;
	}else if(data.password.length < 8)
	{
		_error.text("Please enter a valid password").show();
		return false;
	}
	//assu,ing the code gets this far, we can go ahead and make our ajax call

	_error.hide();

	$.ajax({
		type: 'POST',
		url: '/ajax/register.php',
		data: data,
		dataType:'json',
		async: true,
	})
	.done(function ajaxDone(data){
		console.log(data);
	})
	.fail(function ajaxFailed(e){
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data){
		console.log("Always");
	})

	return false;
})